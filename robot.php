<?php

// Robotクラスをインスタンス化
$robot = new Robot();

class Robot
{
    // プロパティ追加
    public $name;
    public $food;

    // メソッドの追加
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
