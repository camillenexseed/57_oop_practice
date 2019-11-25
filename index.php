<?php

// class クラス名{
//   public プロパティ名;変数
// }

// インスタンス化
$car = new Car();

var_dump($car);
// プロパティとメソッドをインスタンスから呼び出すためにはアロー演算子を使う
// $car->speed = -100;

$car->setSpeed(-100);
$car->start();
$car->run();
$car->stop();

// $car->showSpeed();

//初期化 変数に入れる
$car2 = new Car();
$car2->run();

// アクセス修飾子	アクセス権限
// public	クラス内、クラス外のどこからでもアクセス可能
// private	同じクラス内からのみアクセス可能
// protected	同じクラス、及び子クラスからアクセス可能

// 車のクラス
class Car
{
    // 時速の値を保持するプロパティ
    private $speed;

    // コンストラクタ
    // 初期値
    // 初期化処理の忘れがなくなる
    // オブジェクト生成時に1回だけ呼ばれる
    public function __construct()
    {
        $this->speed = 60;
    }

    // 時速を設定する
    // speedプロパティのセッター
    public function setSpeed($jisoku)
    {
        if ($jisoku >= 0 && $jisoku <= 500) {
            $this->speed = $jisoku;
        }
    }

    // speedプロパティのゲッター
    public function getSpeed()
    {
        return $this->speed;
    }

    // エンジンをかける
    public function start()
    {
        echo 'エンジンをかけました<br>';
    }

    public function run()
    {
        echo '走り出しました<br>';

        $this->showSpeed();
    }

    private function showSpeed()
    {
        echo '時速'.$this->speed.'km/hで走っています<br>';
    }

    // 止まる
    public function stop()
    {
        echo '止まりました<br>';
    }
}
