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
  echo "{$e->getTraceAsString()}\n\n";
}

if(empty($e)) {
  // No exception found, proceed
  
  printf("\nOriginal object var_dump:\n");
  var_dump($obj);

  // Call all getter methods [original object]
  printf("\nCalling getter methods [original object]...\n\n");
  echo $obj->getUser()."\n";
  echo $obj->getService()."\n";
  echo $obj->getURL()."\n";

  // Call all setter methods to change values
  printf("\nSetting new values ...\n\n");
  $obj->setUser("niczak");
  $obj->setService("Facebook");
  $obj->setURL("http://facebook.com/niczak");

  printf("\nModified object var_dump:\n");
  var_dump($obj);

  // Call all getter methods [modified object]
  printf("\nCalling getter methods [modified object]...\n\n");
  echo $obj->getUser()."\n";
  echo $obj->getService()."\n";
  echo $obj->getURL()."\n";

}


?>