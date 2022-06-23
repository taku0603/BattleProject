<?php
// Gundom.phpを読み込むよ。
require 'Gundom.php';

// 読み込んだクラスを使うよ。
$UsukiGundom = new Gundom("usuki", 170, 60, "white");
$UsukiGundom->attack();

// 技クラスだよ。4つまで定義できるよ。
// 技を格納するDBテーブルからもってきたい
require 'Skill.php';
$Skill0 = new Skill("火炎放射", 100, "10％の確率で「火傷状態」にする");
$Skill1 = new Skill("精神統一", 0, "次の攻撃のダメージを3倍にする");
$Skill2 = new Skill("連続パンチ", 30, "ランダムで2〜5回攻撃する");
$Skill3 = new Skill("リフレクト", 0, "これから3ターンの間、受けるダメージを半減する");
$SkillList = [$Skill0->name(),$Skill1->name(),$Skill2->name(),$Skill3->name()];

// エネミークラスだよ。敵情報が入っている。
require 'Enemy.php';
$Enemy = new Enemy('人喰いトラ', "人間を見つけては容赦なく襲いかかっては喰ってしまうやばいトラ");
//var_dump($Enemy);

// データクラスだよ。
//require 'Data.php';
//$Data[] = new Data($Skill0);
//$Data[] = new Data($Skill1);
//$Data[] = new Data($Skill2);
//$Data[] = new Data($Skill3);
//var_dump($Data);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Docs</title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<!-- 【超入門】初心者向け Bootstrapの基本的な使い方 - RAKUS Developers Blog | ラクス エンジニアブログ https://tech-blog.rakus.co.jp/entry/20210226/bootstrap -->
<body>
<header>ヘッダーです</header>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 border border-dark">2</div>
        <div class="col-md-2 border border-dark">2</div>
        <div class="col-md-2 border border-dark">2</div>
        <div class="col-md-6 border border-dark">6</div>
    </div>
</div>

どうする？
<form action="//www-creators.com/rsc/receiver.php" method="post">
    <?php for($i = 0; $i <= 3; ++$i) { ?>
    <input type="text" name="わざ<?php echo $SkillList[$i] ?>" value="<?php echo $SkillList[$i] ?>" placeholder="わざ<?php echo $i+1 ?>"><br>
    <?php } ?>
</form>




<div><?php $UsukiGundom->attack(); ?></div>

<div class="container-fluid">
    <form>
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Button</button>
        
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-secondary">Secondary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-light">Light</button>
        <button type="button" class="btn btn-dark">Dark</button>
        <button type="button" class="btn btn-link">Link</button>
    </form>
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">イベント名</th>
        <th scope="col">開催日</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>UI/UXデザイナーLT会 - vol.2</td>
        <td>3/3</td>
    </tr>
    <tr>
        <th scope="row">2</th>
        <td>フロントエンドTechCafe</td>
        <td>3/10</td>
    </tr>
    <tr>
        <th scope="row">3</th>
        <td>エディタ好きは語りたいLT会</td>
        <td>3/17</td>
    </tr>
    <tr>
        <th scope="row">4</th>
        <td>PdM Tips LT会</td>
        <td>3/18</td>
    </tr>
    <tr>
        <th scope="row">5</th>
        <td>おすすめの技術書LT会</td>
        <td>3/24</td>
    </tr>
    </tbody>
</table>

<div class="text-center" style="background-color: black;">
    <img src="img/summer.jpg">
</div>
<footer>フッターです</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>