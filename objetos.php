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

    public function aplicarDesconto (float $percentual){
        echo "Preço sem desconto: $preco";
        $this->preco -= $this->preco * $percentual / 100;
        echo "Preço com desconto de: $percentual%: $preco";
    }

    public function vender(int $quantidade){
        if($this->estoque >= $quantidade){
            $this->estoque -=$quantidade;
            echo "Vendido $quantidade unidades de $this->nome";
        }
        else{
            echo "Sem estoque suficiente de $this->nome";
        }

    }

    public function resumo(){
        echo "Produto: $this->nome, Preco: $this->preco, Estoque: $this->estoque";
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
        $this->notas = $notas;
        $this->matricula = $matricula;
    }

    public function adicionarNota(float $nota) {
        $this->notas[] = $nota;
        echo "nota: $nota inserida";
    }

    public function media (){
        for($x =0; sizeof($this->notas)>$x;$x++){
            $media += sizeof($this->notas[$x]);
        }
        $media/sizeof($this->notas);
        echo "Média: $media";
    }

    public function aprovado(){
        if ($media>=6){
            return TRUE;
            echo "Aprovado";
        }
        else{
            return FALSE;
            echo "Reprovado";
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
        echo "Valor: $valor depositado. Saldo atual: $saldo";
    }

    public function sacar(float $valor){
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            echo "Você sacou: $valor com sucesso. Saldo atual: $saldo";
        }
        else{
            echo "Saldo insuficiente";
        }
    }

    public function transferir(contaBancaria $destino, float $valor){
        $destiono += $valor;
        $this->saldo -=$valor;
        echo "$valor Depositado no destino. Saldo atual: $this->saldo";
    }
}


//_____________________________BIBLIOTECA_____________________________

class biblioteca
{
    public $nome;
    private array $livros = [];

    public function __construct($nome){
        $this->nome = $nome;
        $this->livros = [];
    }

    public function adicionarLivro(string $titulo){
        $this->livros[] = $titulo;
        echo "$livro adicionado a lista $livros";
    }

    public function buscarLivro(string $termo){
        $encontrados = [];

        foreach ($this->livros as $livro) {
            if(stripos($livros, $termo) !== FALSE){
                $encontrados[] = $livro;
                echo "Livros com esse termo: $encontrados";
            }
            else {
                echo "Não foi encontrado um livro com o termo: $termo";
            }
        }
    }
    public function listarLivros(){
        if (sizeof($this->livros)==0) {
            return "A biblioteca está vazia.";
        }
        else{
            $lista = "-Livros da biblioteca '{$this->nome}':\n";
            foreach ($this->livros as $i -> $livro) {
                $lista .= ($i+1) . ". " . $livro . "\n";
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
        $this->itens = [];
    
    }

    public function adicionarItem(produto $produto, int $quantidade){
        $this->itens += ['Produto' => $produto, 'Quantidade' => $quantidade];
        echo "Produto: $produto adicionado a lista $itens";
    }

    public function total(){
        $total = 0;
        foreach($this->itens as $item){
          $total += $item['Produto']->preco *$item['Quantidade'];            
        }
        echo "Total: $total";
    }
    
    public function detalhes(){
        foreach($this->)
        echo "Cliente $this->cliente comprou $this->itens";

    }
}

//_____________________________TURMA_____________________________

class turma
{
    public $disciplina;
    private array $alunos = [];

    public function __construct($disciplina){
        $this->disciplina = $disciplina;
        $this->itens = [];
    }

    public function adicionarAluno(aluno $aluno){
        $this->alunos += ['Aluno' => $aluno, 'Media'=> $media];
        echo "$aluno adicionado a lista $alunos";
    }

    public function melhorAluno(){
        aluno $melhor = null;
        foreach($this->alunos as $aluno){
            if($aluno->media() > $melhor->media()){
                $melhor = $aluno;
            }
            echo "$melhor->$nome ,A maior média é do aluno $melhor->media";
        }
    }

    public function resultadoFinal()



}



//_____________________________AGENDA_____________________________
