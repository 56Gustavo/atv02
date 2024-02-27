<?php
// Crie duas classes, 'Cliente' e 'Pedido', no namespace 'Loja'.
// Em seguida, crie uma classe 'Pagamento' em um namespace diferente, por exemplo, 'Financeiro'.
// Demonstre a utilização das classes em seus respectivos namespaces.

namespace Loja;

class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

class Pedido {
    private $numero;

    public function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }
}

namespace Financeiro;

class Pagamento {
    private $valor;

    public function __construct($valor) {
        $this->valor = $valor;
    }

    public function getValor() {
        return $this->valor;
    }
}

echo "Ex 2.3:";
echo "<br>";
$cliente = new \Loja\Cliente("João");
echo "Cliente: " . $cliente->getNome() . "<br>";

$pedido = new \Loja\Pedido(123);
echo "Pedido: " . $pedido->getNumero() . "<br>";

$pagamento = new \Financeiro\Pagamento(100.00);
echo "Pagamento: R$" . $pagamento->getValor() . "<br>";

?> 






<?php
// Crie uma classe chamada 'Livro' com propriedades privadas 'titulo' e 'autor'.
// Implemente um método construtor para inicializar essas propriedades.
// Em seguida, crie um objeto da classe 'Livro' e exiba suas propriedades.

class Livro {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
}

$livro = new Livro("Dom Casmurro", "Machado de Assis");
echo "<br>";
echo "Ex 1.1:";
echo "<br>";
echo "Título: " . $livro->getTitulo();
echo "<br>";
echo "Autor: " . $livro->getAutor();

?>





<?php
// Modifique a classe 'Livro' do exercício anterior.
// Adicione métodos públicos 'setTitulo($novoTitulo)' e 'setAutor($novoAutor)' que permitem modificar as propriedades.
// Use esses métodos para alterar o título e o autor do objeto criado.

class Livro02 {
    private $titulo;
    private $autor;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setTitulo($novoTitulo) {
        $this->titulo = $novoTitulo;
    }

    public function setAutor($novoAutor) {
        $this->autor = $novoAutor;
    }
}

$livro = new Livro02("Dom Casmurro", "Machado de Assis");

echo "<br>";
echo "<br>";
echo "Ex 1.2:";
echo "<br>";
echo "Título: " . $livro->getTitulo()  ;
echo "<br>";
echo "Autor: " . $livro->getAutor()  ;

// Modificando o título e o autor 
$livro->setTitulo("O Príncipe");
$livro->setAutor("Nicolau Maquiavel");

echo "<br>";
echo "<br>";
echo "Novo Título: " . $livro->getTitulo();
echo "<br>";
echo "Novo Autor: " . $livro->getAutor();

?>





<?php
// Crie uma classe base chamada 'Animal' com propriedades privadas 'nome' e 'idade'.
// Implemente um método construtor e métodos públicos para acessar e modificar essas propriedades.
// Crie uma classe derivada chamada 'Cachorro' que herda de 'Animal' e sobrescreva o método de acesso à propriedade 'idade'.
// Crie um objeto da classe 'Cachorro' e exiba suas propriedades.

class Animal {
    private $nome;
    private $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

class Cachorro extends Animal {
   
    public function getIdade() {
        return "Idade: " . parent::getIdade() . " anos";
    }
}

$cachorro = new Cachorro("Rex", 5);

echo "<br>";
echo "<br>";
echo "Ex 1.3:";
echo "<br>";
echo "Nome: " . $cachorro->getNome();
echo "<br>";
echo $cachorro->getIdade();

?>






<?php
// Modifique a classe 'Cachorro' do exercício anterior.
// Torne as propriedades 'nome' e 'idade' protegidas e utilize métodos getters e setters para acessá-las e modificá-las.

class Animal1 {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }
}

class Cachorro1 extends Animal1 {

    public function getIdade() {
        return "Idade: " . $this->idade . " anos";
    }
}

$cachorro = new Cachorro1("Billy", 7);

echo "<br>";
echo "<br>";
echo "Ex 1.4:";
echo "<br>";
echo "Nome: " . $cachorro->getNome() . "<br>";
echo $cachorro->getIdade() . "<br>";
?>






<?php
// Crie uma classe chamada 'Calculadora' com um método estático chamado 'soma' que recebe dois números e retorna a soma.
// Não é necessário instanciar a classe para utilizar o método 'soma'.
// Demonstre a utilização deste método.

class Calculadora {
    public static function soma($num1, $num2) {
        return $num1 + $num2;
    }
}

$resultado = Calculadora::soma(5, 3);
echo "<br>";
echo "<br>";
echo "Ex 1.5:";
echo "<br>";
echo "Resultado: " . $resultado; 
?> 





<?php
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo {
    protected $marca;
    protected $modelo;

    public function __construct($marca, $modelo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function exibirInformacoes() {
        echo "Marca: {$this->marca} ";
        echo "<br>";
        echo "Modelo: {$this->modelo}";
        echo "<br>";
    }
}

class Carro extends Veiculo {
    private $numeroPortas;

    public function __construct($marca, $modelo, $numeroPortas) {
        parent::__construct($marca, $modelo);
        $this->numeroPortas = $numeroPortas;
    }

    public function exibirNumeroPortas() {
        echo "Número de Portas: {$this->numeroPortas}";
        echo "<br>";
    }
}

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function exibirCilindradas() {
        echo "Cilindradas: {$this->cilindradas}<br>";
    }
}


$carro = new Carro("Fiat", "Uno", 4);
$moto = new Moto("Honda", "Start", "160cc");


echo "<br>";
echo "<br>";
echo "Ex 2.1:";
echo "<br>";
$carro->exibirInformacoes();
$carro->exibirNumeroPortas();
echo "<br>";
$moto->exibirInformacoes();
$moto->exibirCilindradas();

?> 





<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens {
    public function enviarMensagem($mensagem) {
        echo "Enviando: $mensagem";
        echo "<br>";
    }
}

class EmailSender {
    use Mensagens;
}

class SMSSender {
    use Mensagens;
}

echo "<br>";
echo "Ex 2.2:";
echo "<br>";
$emailSender = new EmailSender();
$emailSender->enviarMensagem("e-mail teste.");

$smsSender = new SMSSender();
$smsSender->enviarMensagem("SMS  teste.");

?> 





<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Animal2 {
    public function emitirSom() {
        echo "Som genérico de animal";
        echo "<br>";
    }
}

class Cachorro2 extends Animal2 {
    public function emitirSom() {
        echo "Au au!";
        echo "<br>";
    }
}

class Gato2 extends Animal2 {
    public function emitirSom() {
        echo "Miau!";
        echo "<br>";
    }
}

$cachorro = new Cachorro2();
$gato = new Gato2();
echo "<br>";
echo "Ex 2.4:";
echo "<br>";
$cachorro->emitirSom();
$gato->emitirSom();   

?> 





<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro {
    public function registrarLog($mensagem) {
        echo "Erro: $mensagem";
        echo "<br>";
    }
}

trait LogInfo {
    public function registrarLog($mensagem) {
        echo "Info: $mensagem";
        echo "<br>";
    }
}


class Registro {
    use LogErro, LogInfo {
        LogErro::registrarLog insteadof LogInfo; // Resolve o conflito de métodos usando o método da trait LogErro
        LogInfo::registrarLog as registrarLogInfo; // Renomeia o método da trait LogInfo para evitar conflito
    }
}

$registro = new Registro();
echo "<br>";
echo "Ex 2.5:";
echo "<br>";
$registro->registrarLog("Erro crítico ocorreu!"); // Utiliza o método da trait LogErro
$registro->registrarLogInfo("Informação importante."); // Utiliza o método da trait LogInfo

?>
