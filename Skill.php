<?php

class Skill
{
    function __construct($name, $damege, $effect)
    {
        // メンバ変数を初期化
        // メソッド内自身のメンバ変数を扱うときは$thisポインタをつけてアクセスするよ
        $this->name = $name;
        $this->damege = $damege;
        $this->effect = $effect;
    }

    private string $name; // 技名
    private int $damege; // ダメージ量
    private string $effect; // 効果

    public function name()
    {
        return $this->name;
    }
    public function damege()
    {
        return $this->damege;
    }
    public function effect()
    {
        return $this->effect;
    }
}