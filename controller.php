<?php 
function __autoload($class)
{
  include_once('./Classes/' . $class . '.class.php');
}

// Instantiate new Social object.
try {
  $obj = new Social("Twitter", "@niczak", "twitter.com/niczak");
  // Broken example below, uncomment out to test exception handling
  //$obj = new Social("Twitter", "@niczak");
}
catch(Exception $e) {
  echo "Exception caught: {$e->getMessage()}\n\n";
}

if(empty($e)) {
  // No exception found, show contents of object.
  var_dump($obj);
}


?>