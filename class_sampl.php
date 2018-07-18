クラス名のルール
クラス名は半角英大文字から始まる名前にします。
例: User Account Image Group など

<?php
class Review {
  private static $review_count = 0;

  public static function get_review_count(){
    return Review::$review_count;
  }

  public function __construct() {
    $this->title = "";
    $this->genre = "";
    $this->impresston = "";
    Review::$review_count = Review::$review_count + 1;
    echo "Reviewクラスのインスタンスが生成されました。\n";
  }

  public function write_review($title, $genre, $impression) {
  $this->title = $title;
  $this->genre = $genre;
  $this->impression = $impression;
}

public function show_review() {
  $line = "---------------------------";
  echo "ジャンル : {$this->genre}\n{$line}\n";
  echo "タイトル : {$this->title}\n{$line}\n";
  echo "感想 :\n{$this->impression}\n{$line}\n";
}
}
// 静的メソッド
// 静的メソッドはインスタンス化されていなくても外部から直接呼び出すことができます。
// つまり、クラスに対して使用できるメソッドです。
// 具体的には「静的メソッドを定義したクラス自身」に対して使えるメソッドです。
// static(スタティック)メソッドと呼ぶこともあります。
echo Review::get_review_count(), PHP_EOL;

$review = new Review(); // Reviewクラスのインスタンスを生成
$review->write_review("るろうに剣心", "映画", "アクションがすごい！");
var_dump($review);
$review->show_review();

echo Review::get_review_count(), PHP_EOL;

 ?>
