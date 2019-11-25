<?php

// Robotクラスをインスタンス化
$robot = new Robot();

$robot->setName('ドラえもん');
$robot->setFood('どら焼き');

$robot->greeting();

$robot2 = new Robot();

$robot2->setName('ドラミ');
$robot2->setFood('メロンパン');

$robot2->greeting();

class Robot
{
    // プロパティ追加
    public $name;
    public $food;

    // メソッドの追加
    // nameプロパティに値を設定するメソッド
    public function setName($namae)
    {
        $this->name = $namae;
    }

    // foodプロパティに値を設定するメソッド
    public function setFood($tabemono)
    {
        $this->food = $tabemono;
    }

    // talkメソッド追加
    public function talk()
    {
        echo 'こんにちは、ボクの名前は'.$this->name.'です<br>';
    }

    // eatメソッド追加
    public function eat()
    {
        echo '好きな食べ物は'.$this->food.'です<br>';
    }

    // greetingメソッド追加
    public function greeting()
    {
        $this->talk();
        $this->eat();
    }
}
