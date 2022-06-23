<?php

interface PGundom
{  // インターフェイスだよ。
    //クラスで実装すべきメソッドを規格として定めるよ。attackの中身までは指定しないよ。
    // todo どういう場面で生きてくるかがピンとこないけど、、
    public function attack();
}

// クラス。オブジェクトをつくるためのテンプレート。最低限の下書き。これを使いまわせば色んな所で使えるね。
// インターフェースを実装するため、implementsを宣言するよ。複数指定することも可能だよ。
class Gundom implements PGundom
{
    // コンストラクタ(インスタンス生成時に一番最初に詠み込まれる関数だね)
    function __construct($name, $height, $weight, $color)
    {
        // メンバ変数を初期化
        // メソッド内自身のメンバ変数を扱うときは$thisポインタをつけてアクセスするよ
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
        $this->color = $color;
    }

    // メンバ変数(プロパティ、インスタンス変数)
    // privateなので外から触れることは出来ないよ
    private $name;
    private $height;
    private $weight;
    private $color;

    // メンバ関数(メソッド)
    // publicはほかクラスから呼び出せる
    public function walk()
    {
    }  // 歩く

    public function squat()
    {
    }  // しゃがむ

    public function attack()
    {
        echo "attack.\n";
    }  // 攻撃する

    // 重要なメソッドにはprivateで宣言することで外部から変更出来なくなるよ。俗に言うカプセル化だね。
    // public：継承可能。アクセス修飾子の定義が無い場合にはpublic扱い。
    // private：継承不可能
    // protected：継承可能。privateとpublicの中間的存在であり、継承したクラスからは参照できる非公開な要素
    private function hoge()
    {
    }

    // ゲッター
    public function get_height()
    {
        return $this->height;
    }
}

// オブジェクト(インスタンス)(概念的でわかりにくいよね)を作ってみるよ
$zaku_ii = new Gundom("ZakuII", 17.5, 56.2, "Green");
$destiny_gundom = new Gundom("Destiny Gundom", 18.08, 79.44, "Blue & White");

// PHPを実行して中身を確認してみよう〜〜〜
//var_dump($zaku_ii);
//var_dump($destiny_gundom);

// 継承クラス
class Zaku extends Gundom implements PGundom
{
    public function attack()
    {  // 攻撃する
        echo "Zaku attack.\n";
    }
}

$zaku = new Zaku("ZakuII", 17.5, 56.2, "Green");
$zaku->attack();  // -> Zaku attack.