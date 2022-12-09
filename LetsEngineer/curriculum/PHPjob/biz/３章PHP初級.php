<html>
<?php
// index.php
define("ADMIN_EMAIL", "y-i-group@gmail.com");
define("LIST_COUNT", 15);

echo ADMIN_EMAIL;
echo '<bt>';
echo LIST_COUNT;
echo '<br>';

$en_words = "Hello World!";
var_dump($en_words);
echo '<br>';
$ja_words = 'こんにちは';
var_dump($ja_words);
echo '<br>';
?>
<?php
// index.php
echo $message;
$x = 8;
$y = 5.55;
$flag = true;
$emp = null;

$color = 'blue';
echo "Sky is ${color}color";
echo '<br>';
var_dump($x);
echo '<br>';
var_dump($y);
echo '<br>';
var_dump($flag);
echo '<br>';
var_dump($emp);
echo '<br>';
?>
<?php
echo 1 + 1;
// 改行は適宜入れた方が見やすくなります。
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;
echo '<br>';
echo '<br>';
// 単項演算子
// $x = $x + 1
$x++; 
echo $x; 
echo '<br>';
// $x = $x - 1
$x--;
echo $x;
echo '<br>';
$x = 0;

 // $x = $x + 5;
$x += 5;
echo $x;
echo '<br>';

 // $x = $x * 5;
$x *= 5;
echo $x;
echo '<br>';
?>
<?php
$age = 22; 

if ($age >= 20) {
    echo "お酒が飲めるぞ！";
} else {
    echo "お酒は二十歳になってから！";
    echo '<br>';
}
?>
<?php
// 年齢
$age = 22;
// 学生かどうか
$is_student = true;

if ($age < 22 && $is_student) {
    echo '学割パックが使えるよ';
} elseif ($age < 25) {
    echo '若者応援割引が使えるよ';
    
}
echo '<br>';  
?>
<?php
// 例として、血液型を診断する条件分岐
$blood = 'B';
if($blood == 'A') {
  echo "A型です";
} elseif($blood == 'B') {
  echo "B型です";
} elseif($blood == 'O') {
  echo "O型です";
} elseif($blood == 'AB') {
  echo "AB型です";
 } else {
  echo "A/B/O/ABから選択してください";
}
echo '<br>';
?>
<?php
$blood = 'A';
switch($blood) {
    case 'A':
        print 'A型です';
        break;
    case 'B':
        print 'B型です';
        break;
    case 'AB':
        print 'AB型です';
        break;
    case 'O':
        print 'O型です';
        break;
    default:
        echo "A/B/O/ABから選択してください";
}
?>
<?php
echo '<br>';
$string = '1';
$int = 1;

if (1 === $string){
    echo '変数stringはint型です。';
}   else {
    echo '変数stringはstring型です。';
    echo '<br>';
}
if (1 === $int){
    echo '変数stringはint型です。';
}   else {
    echo '変数stringはstring型です。';
}
echo '<br>';
?>

<?php
$name = "taro";
$pw = "pass";

if (($name === "taro") && ($pw === "pass")){
    echo 'ログイン成功です';
}
if (($name != "taro") && ($pw != "pass" )){
    echo '入力情報が間違っています';
}
elseif ($pw != "pass"){
    echo 'パスワードが間違っています。';
}   
elseif ($name != 'taro'){
    echo '名前が間違っています。'; 
}   echo '<br>';
?>
<?php
$num = 0;
while($num < 1000) {
    echo $num;
    $num++;echo '<br>';
    if($num == 101) {
        break;
    } 
}   echo '<br>';
?>
<?php
$num = 0;
while($num < 1000) {
    
    $num++; echo '<br>';
    if($num == 101) {
        break;
    }
    if (($num % 3 === 0) && ($num % 5 === 0)) {
        echo 'FizzBuzz!!';
    }  
    elseif ($num % 3 === 0) {
        echo 'Fizz!';
    } 
    elseif ($num % 5 === 0) {
        echo 'Buzz!';
    }
    else echo $num;
}
?>
</html>