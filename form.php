<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <form
      action="action.php"
      method="GET"
      style="box-sizing: border-box; width: min-content"
    >
      <p>Your Name: <input type="text" name="name" /></p>
      <p>Your Password: <input type="password" name="password" /></p>
      <p><input type="submit" /></p>
    </form>


<!-- ----------2------------->

<h1>Search Engine Website</h1>
    <form method="post" action="">
 Where do yo want to go? <input type="url" name="redirect"  pattern="https://.*">
  <input type="submit" value="Go">
</form>
<?php
if (isset($_POST['redirect'])) {
  $go = $_POST['redirect'];
  header("Location:$go");
}
?>
<!-- ----------3------------->
<h1>Simple Calculator</h1>
<?php
$result = '';
if (isset($_POST['result'])) {
    $num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$case = $_POST['case'];
    switch ($case) {
        case "+":
           $result = $num1 + $num2;
            break;
        case "-":
           $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            $result = $num1 / $num2;
    }}
?>
<form  method="post" id="calculator">
    <br>
    <p>
       First Number <input type="number" name="num1" id="num1" required="required" value="<?php echo $num1; ?>" />
    </p>
    <p>

       Second Number <input type="number" name="num2" id="num2" required="required" value="<?php echo $num2; ?>" />
    </p>
    <input type="submit" name="case" value="+" required/>
    <input type="submit" name="case" value="-" required />
    <input type="submit" name="case" value="*" />
    <input type="submit" name="case" value="/" />
    <br>
    <p>
        Result = <input readonly="readonly" name="result" value="<?php echo $result ?>">
    </p>
</form>

      

<!-- ----------4------------>
<h1>To-Do App</h1>

<form method="post"  >
        <input type="text" name="task" required placeholder="Enter Todays Task">
        <input type="submit" name="addTask" value= "+" />
<?php
$todo =[''];
// session_start();
if (isset($_POST["addTask"])) {
    if (isset($todo["tasks"])) {
        array_push($todo["tasks"],$_POST["task"]);
    }else{
        $todo["tasks"] = array($_POST["task"]);
    }
}
if (isset($todo["tasks"])){
    foreach($todo["tasks"] as $task){
        echo "<p> Task: $task</p>";
    }
}
?>
</form>
<!-- ----------5------------->
<?php
$path= explode('/',$_SERVER['SCRIPT_NAME']);
echo 'Project name: '.$path[1].'<br>';
echo 'Script name: '.$path[2].'<br>';
// <!-- ----------6------------->
echo 'Request time: '.$_SERVER['REQUEST_TIME'] . '<br>';
// <!-- ----------7------------->
if (isset($_SESSION['refresh']))
    $_SESSION['refresh']++;
else
    $_SESSION['refresh'] = 1;
echo '# Of Refreshes: '.$_SESSION['refresh'].' times';
// <!-- ----------8------------->
setcookie("Name", "Monther", time() + 1200,"/part1", false, false);
echo "<pre>";

print_r($_COOKIE);

setcookie("Name", "Monther", time() - 1200,"/part1", false, false);
?>

  </body>
</html>
