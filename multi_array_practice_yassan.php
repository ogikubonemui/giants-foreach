<?php
$player1 = ['id' => 1, 'name' => '吉川', 'homerun' => 4];
$player2 = ['id' => 2, 'name' => '坂本', 'homerun' => 18];
$player3 = ['id' => 3, 'name' => '丸', 'homerun' => 39];
$player4 = ['id' => 4, 'name' => '岡本', 'homerun' => 33];
$player5 = ['id' => 5, 'name' => 'ビヤヌエバ', 'homerun' => 20];
$player6 = ['id' => 6, 'name' => '亀井', 'homerun' => 13];
$player7 = ['id' => 7, 'name' => 'ゲレーロ', 'homerun' => 15];
$player8 = ['id' => 8, 'name' => '小林', 'homerun' => 2];
$player9 = ['id' => 9, 'name' => '菅野', 'homerun' => 1];
$player10 = ['id' => 10, 'name' => '中島', 'homerun' => 5];

$players_1 = [$player1,$player2,$player3,$player4,$player5];
$players_2 = [$player6,$player7,$player8,$player9,$player10];

$training1 = ['id' => 1, 'name' => 'machine', 'members' => $players_1];
$training2 = ['id' => 2, 'name' => 'runnning', 'members' => $players_2];
$giants = ['trainings' => [$training1, $training2]];

//01 runnningを表示
echo $giants["trainings"][1]['name'];
echo '<hr><br>';

// Q2. 繰り返し処理を用いて'machine'と'runnning'を表示してください
// foreach (配列 as 配列の各要素)
// foreach (users as user)
// foreach (foods as food)

foreach($giants['trainings'] as $trainings){
	echo $trainings['name'];
	echo '<br>';
}

echo '<hr><br>';

// Q3. 繰り返し処理と条件分岐処理を用いて12週間の生徒の名前とコース名を一覧表示してください
// 例）Aさん：English

echo '20本以上ホームランを打った選手'.'<br>';
foreach ($giants['trainings']as$trainings){
	foreach ($trainings['members']as$players){
		if($players['homerun'] >= 20){
			echo $players['name'] . '選手は' . $players['homerun'] . '本のホームランを打ちました。';
			echo '<br>';
		}
	}
}