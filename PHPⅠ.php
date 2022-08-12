$name = "Bob";                   //PHPでの変数の付け方
　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　//PHPでは文末に「;」をつける

$name = $name."、Hello";          //文字連結
($name .= ".Hello")

echo "こんにちは、{$name}さん"        //式展開 ダブルクオーテーションの中で{}をつかう　　　　×シングルクオーテーション

switch ($coin) {                 //ifでは複雑になりそうな時、switch使う
  case coin 1:                   //「；」ではなく「:」
    echo '表';
    break;
  case coin 2:
    echo '裏';
    break;
  default:
    echo 'エラー';
    break;
}

$names = array('John', 'Kate', 'Bob');   //　PHPでの配列の定義

$names[] = 'Mary';                       //　配列の末尾に値を追加
$names[3]; // Mary

$user = (                                //　配列キーバリュー形式
  'name' => 'A君',
  'age' => '100',
  'gender' => 'male'
);

for(初期値;ループの条件;変数の更新){　処理;　}

// breakとcontinueの違い
// break ループを完全に抜け出す
// continue 条件にマッチするものだけループから抜け出す

ふつうの配列形式　　foreach (配列 as 値変数)

キーバリュー形式の配列　foreach (配列 as キー変数 => バリュー変数)

// 組み込む関数　=> strlen, count, rand ...

function 関数名(){                 // 関数定義
  処理;
}

関数名();                          // 関数呼び出し
