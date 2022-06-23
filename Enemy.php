<?php

class Enemy
{
    public string $name;
    public string $text;
    
    public function __construct(string $name, string $text)
    {
        $this->name = $name;
        $this->text = $text;
    }
}