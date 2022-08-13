<?php require_once(XXX.php) ?>        // 別のphpファイルを読み込む　「;」はコード一行で完結するときは不要

<? php
class Menu(大文字で始める)　{             // クラスの定義(プロパティとメソッドを定義するところ)
  
  public $name;                       // プロパティを定義　　　　クラスの外部からでもアクセスできる
  (private $name;)                      // privateにすると、クラスの外部からアクセスできない　　　プロパティは基本privateにする
  
  public function hello１(){            // 
    echo "これがメソッドです。";
  }
  
  public function hello２(){                             // メソッド内でインスタンスのプロパティやメソッドにアクセスしたい時には「$this」という特殊な変数を使う。
    echo '私の名前は'.$this -> name.'です。';              // $thisはクラス内のメソッドの定義の中でのみ使用できる。
  }                                                     // $thisはメソッドが呼ばれた時に、そのメソッドを呼び出しているインスタンスに置き換えられる。
  
  public function __construct() {                       // newを用いてインスタンスを生成するときに、このメソッドが自動的に呼ばれる。
    echo "一つのメニューが作成されました";
  }
  
}

$curry = new Menu(); //=> 一つのメニューが作成されました      // インスタンス生成

$curry -> name = "CURRY";             // プロパティに値を代入
echo $curry -> name; //=> CURRY
  
$curry -> hello1();                    // メソッドを呼び出す

$curry -> hello2(); //=> 私の名前はCURRYです。

?>

<?php
class Menu　{
  public $name;
  public function __construct($name){
    echo $name;
  }      
}

$curry = new Menu('PIZZA');  //=> PIZZA
?>

<?php
class Menu　{
  public $name;
  public function __construct($name){
    $this -> name = $name;                       // インスタンスのプロパティに値をセットする
  }  
}
$curry = new Menu('PIZZA');  //=> PIZZA     
echo $curry -> name //=> PIZZA

?>

<? php
class Menu　{      

  private $name; 
  
  public function __construct($name) {
    $this -> name = $name;
  }
  
  public function getName(){              // ゲッターの定義 : プロパティの値を返すだけのメソッド
    return $this -> name;                 // ゲッターは「getプロパティ名」のように命名するのが一般的
  }
}

$ramen = new Menu('RAMEN');
echo $ramen -> getName();

?>


<? php
class Menu　{      

  private $orderCount = 0;                      // プロパティの初期値設定
  
  public function setOrderCount($orderCount) {
    $this -> orderCount = $orderCount;
  }
}

$juice = new Menu('JUICE');
$juice -> setOrderCount(2);                    // セッター : プロパティの値を変更するメソッド
echo $juice -> getOrderCount();   //=> 2       //セッターは「setプロパティ名」のように命名するのが一般的      

?>
