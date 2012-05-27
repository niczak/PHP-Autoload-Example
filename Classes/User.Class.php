<?php 

/**
 * A basic User class.
 *
 * This class instantiates an object of type User.
 *
 * @author Nicholas Kreidberg <nicholas@nicholaskreidberg.com>
 * @copyright 2012, Nicholas Kreidberg
 */

class User
{
  protected $_email;
  protected $_user;
  protected $_password;

  protected $_db;

  public function __construct($service, $user, $url)
  {
    // Validate data type for all incoming parameters
    $this->service = self::validateString($service);
    $this->user = self::validateString($user);
    $this->url = self::validateString($url);
  }

  public static function validateString($value)
  {
    if(empty($value) || !is_string($value)) {
      throw new Exception("Missing value or invalid type (not string) passed!");
    }
    return $value;
  }

  public static function validateNumeric($value)
  {
    if(empty($value) || !is_numeric($value)) {
      throw new Exception("Missing value or invalid type (not numeric) passed!");
    }
    return $value;
  }  
}

?>