<?php

class Data
{
    // クラス型を引数に設定したクラス
    function __construct(Skill $skill)
    {
        $skill->name();
        $skill->damege();
        $skill->effect();
    }
}