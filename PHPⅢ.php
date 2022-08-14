class Menu {

　　　　public $name;
  public $count;                        // プロパティ                  
  public static $count = 4;             // クラスプロパティ
  public function __construct() {
    self::$count++;                     // クラス内でselfを使うことでクラスプロパティにアクセスできる
  }
  public static function getCount() {   // クラスメソッドの定義
    return self::$count;
  }

　　　　public function getName() {
    return $this -> name;
  }

}

menu1 = new Menu('CURRY', ...);
menu2 = new Menu('PASTA', ...);

echo 'メニュー'Menu::$count'品';
//=> メニュー４品

echo Menu::getCount();
//=> 2

class Food extends Menu {               // DrinkクラスはMenuクラスを継承している
}                                       // 子クラスに定義されているメソッドなら、子クラス内のメソッドが呼ばれるが、定義されてなかったら親クラスのメソッドが呼ばれる

$coffee = new Drink('コーヒー');

echo $coffe->getName();
//=> コーヒー

// instanceof  対象としているインスタンスがクラスのものかどうか
 if ( $coffee instanceof Drink ) => true or false

// オーバーライド : 親クラスにすでにあるメソッドを子クラスで定義すると上書きされる
　　　　　　　=> parent::メソッド名

<?php if (...): ?>
 // 処理
<?php else: ?>
　　// 処理
<?php endif ?>

// アクセス権
public　　　　　　　　　　　　　　　オールOK
protected　　　　　　　　　クラスないと子クラス内
private      　クラス内だけ

