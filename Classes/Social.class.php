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
    $this->service = self::validateString($service);
    $this->user = self::validateString($user);
    $this->url = self::validateString($url);
    // $this->service = $service;
    // $this->user = $user;
    // $this->url = $url;
  }

  public static function validateString($value)
  {
    if(empty($value) || !is_string($value)) {
      throw new Exception("Missing or invalid value passed!");
    }
    return $value;
  }
}

?>