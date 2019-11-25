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
    private $name;
    private $food;

    // メソッドの追加
    // コンストラクタで初期値を設定
    public function __construct()
    {
        $this->name = 'ドラえもん';
        $this->food = 'どら焼き';
    }

    // nameプロパティに値を設定するメソッド
    public function setName($namae)
    {
        $this->name = $namae;
    }

    // nameプロパティのゲッターメソッド追加
    public function getName()
    {
        return $this->name;
    }

    // foodプロパティに値を設定するメソッド
    public function setFood($tabemono)
    {
        $this->food = $tabemono;
    }

    // foodプロパティのゲッターメソッド追加
    public function getFood()
    {
        return $this->food;
    }

    // talkメソッド追加
    private function talk()
    {
        echo 'こんにちは、ボクの名前は'.$this->name.'です<br>';
    }

    // eatメソッド追加
    private function eat()
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
