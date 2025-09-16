<?php

//_____________________________PRODUTO_____________________________

class produto
{
    public $nome;
    public $preco;
    public $estoque;

    public function __construct($nome, $preco, $estoque){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;
    }

    public function aplicarDesconto(float $percentual){
        echo "Preço sem desconto: {$this->preco}\n";
        $this->preco -= $this->preco * $percentual / 100;
        echo "Preço com desconto de {$percentual}%: {$this->preco}\n";
    }

    public function vender(int $quantidade){
        if($this->estoque >= $quantidade){
            $this->estoque -= $quantidade;
            echo "Vendido $quantidade unidades de {$this->nome}\n";
        } else {
            echo "Sem estoque suficiente de {$this->nome}\n";
        }
    }

    public function resumo(){
        echo "Produto: {$this->nome}, Preço: {$this->preco}, Estoque: {$this->estoque}\n";
    }
}

//_____________________________ALUNO_____________________________

class aluno
{
    public $nome;
    public $matricula;
    private array $notas = [];

    public function __construct($nome, $matricula){
        $this->nome = $nome;
        $this->matricula = $matricula;
    }

    public function adicionarNota(float $nota) {
        $this->notas[] = $nota;
        echo "Nota: $nota inserida\n";
    }

    public function media(){
        $total = array_sum($this->notas);
        $media = count($this->notas) ? $total / count($this->notas) : 0;
        echo "Média: $media\n";
        return $media;
    }

    public function aprovado(){
        $media = $this->media();
        if ($media >= 6) {
            echo "Aprovado\n";
            return true;
        } else {
            echo "Reprovado\n";
            return false;
        }
    }
}

//_____________________________CONTA BANCARIA_____________________________

class contaBancaria
{
    public $titular;
    public $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar(float $valor){
        $this->saldo += $valor;
        echo "Valor: $valor depositado. Saldo atual: {$this->saldo}\n";
    }

    public function sacar(float $valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Você sacou: $valor com sucesso. Saldo atual: {$this->saldo}\n";
        } else {
            echo "Saldo insuficiente\n";
        }
    }

    public function transferir(contaBancaria $destino, float $valor){
        if ($this->saldo >= $valor) {
            $this->saldo -= $valor;
            $destino->saldo += $valor;
            echo "$valor transferido para {$destino->titular}. Saldo atual: {$this->saldo}\n";
        } else {
            echo "Transferência não realizada. Saldo insuficiente.\n";
        }
    }
}

//_____________________________BIBLIOTECA_____________________________

class biblioteca
{
    public $nome;
    private array $livros = [];

    public function __construct($nome){
        $this->nome = $nome;
    }

    public function adicionarLivro(string $titulo){
        $this->livros[] = $titulo;
        echo "$titulo adicionado à lista de livros.\n";
    }

    public function buscarLivro(string $termo){
        $encontrados = [];

        foreach ($this->livros as $livro) {
            if (stripos($livro, $termo) !== false) {
                $encontrados[] = $livro;
            }
        }

        if (count($encontrados) > 0) {
            echo "Livros encontrados com o termo '$termo':\n";
            foreach ($encontrados as $livro) {
                echo "- $livro\n";
            }
        } else {
            echo "Nenhum livro encontrado com o termo: $termo\n";
        }
    }

    public function listarLivros(){
        if (count($this->livros) == 0) {
            echo "A biblioteca está vazia.\n";
        } else {
            echo "Livros da biblioteca '{$this->nome}':\n";
            foreach ($this->livros as $i => $livro) {
                echo ($i+1) . ". $livro\n";
            }
        }
    }
}

//_____________________________PEDIDO_____________________________

class pedido
{
    public $cliente;
    private array $itens = [];

    public function __construct($cliente){
        $this->cliente = $cliente;
    }

    public function adicionarItem(produto $produto, int $quantidade){
        $this->itens[] = ['Produto' => $produto, 'Quantidade' => $quantidade];
        echo "Produto '{$produto->nome}' adicionado à lista de itens\n";
    }

    public function total(){
        $total = 0;
        foreach($this->itens as $item){
            $total += $item['Produto']->preco * $item['Quantidade'];
        }
        echo "Total: $total\n";
    }

    public function detalhes(){
        echo "Detalhes do pedido de {$this->cliente}:\n";
        foreach ($this->itens as $item) {
            echo "- {$item['Quantidade']}x {$item['Produto']->nome} (R$ {$item['Produto']->preco})\n";
        }
    }
}

//_____________________________TURMA_____________________________

class turma
{
    public $disciplina;
    private array $alunos = [];

    public function __construct($disciplina){
        $this->disciplina = $disciplina;
    }

    public function adicionarAluno(aluno $aluno){
        $this->alunos[] = $aluno;
        echo "{$aluno->nome} adicionado à turma de {$this->disciplina}\n";
    }

    public function melhorAluno(){
        $melhor = null;
        $maiorMedia = -1;

        foreach ($this->alunos as $aluno) {
            $media = $aluno->media();
            if ($media > $maiorMedia) {
                $maiorMedia = $media;
                $melhor = $aluno;
            }
        }

        if ($melhor) {
            echo "Melhor aluno: {$melhor->nome} com média {$maiorMedia}\n";
        } else {
            echo "Nenhum aluno cadastrado.\n";
        }
    }

    public function resultadoFinal(){
        echo "Resultados finais da turma de {$this->disciplina}:\n";
        foreach ($this->alunos as $aluno) {
            $aprovado = $aluno->aprovado() ? 'Aprovado' : 'Reprovado';
            echo "- {$aluno->nome}: $aprovado\n";
        }
    }
}

//_____________________________AGENDA_____________________________

class Agenda
{
    private array $contatos = [];

    public function adicionarContato(string $nome, string $telefone)
    {
        $this->contatos[$nome] = $telefone;
        echo "Contato '$nome' adicionado com telefone: $telefone\n";
    }

    public function removerContato(string $nome)
    {
        if (isset($this->contatos[$nome])) {
            unset($this->contatos[$nome]);
            echo "Contato '$nome' removido com sucesso.\n";
        } else {
            echo "Contato '$nome' não encontrado.\n";
        }
    }

    public function buscarContato(string $nome)
    {
        if (isset($this->contatos[$nome])) {
            echo "Telefone de '$nome': " . $this->contatos[$nome] . "\n";
        } else {
            echo "Contato '$nome' não encontrado.\n";
        }
    }

    public function listarContatos()
    {
        if (empty($this->contatos)) {
            echo "A agenda está vazia.\n";
            return;
        }

        ksort($this->contatos);
        echo "Contatos na agenda:\n";
        foreach ($this->contatos as $nome => $telefone) {
            echo "- $nome: $telefone\n";
        }
    }
}
