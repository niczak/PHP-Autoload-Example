<?php 

/**
 * A very basic class example.
 *
 * This class instantiates an object of type Social.
 *
 * @author Nicholas Kreidberg <nicholas@nicholaskreidberg.com>
 * @copyright 2012, Nicholas Kreidberg
 */

class Social
{
  public $service;
  public $user;
  public $url;

  public function __construct($service, $user, $url)
  {
    // Validate data type for all incoming parameters
    $this->service = self::validateString($service);
    $this->user = self::validateString($user);
    $this->url = self::validateString($url);
  }

  // Getters
  public function getService() {
    return $this->service;
  }

  public function getURL() {
    return $this->url;
  }

  public function getUser() {
    return $this->user;
  }
  
  // Setters
  public function setService($service) {
    $this->service = self::validateString($service);
  }

  public function setURL($url) {
    $this->url = self::validateString($url);
  }

  public function setUser($user) {
    $this->user = self::validateString($user);
  }


  public static function validateString($value)
  {
    if(empty($value) || !is_string($value)) {
      throw new Exception("Missing value or invalid type (not string) passed!");
    }
    return $value;
  }
}

?>