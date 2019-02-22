<?php

class KopoKopo {
  public static $client_id;
  public static $client_secret;
  
  function __construct( $client_id, $client_secret ){
    self::$client_id = $client_id;
    self::$client_secret = $client_secret; 
  }
  
  public static function authenticate(){
    $endpoint = 'https://api-sandbox.kopokopo.com/oauth/v4/token';
    //curl -d "client_id=CGQXLrlfuOqdUYdTcLz3rBiCZQDRvdWIUPkwasGMuGhkem9Bo&client_secret=g7QLwvO37aN2HoKx1amekWi8a2g7AIuPbD5CcJSLqXIcDOxfTr&grant_type=client_credentials"
    // -H "Content-Type: application/x-www-form-urlencoded"
      //  "https://api-sandbox.kopokopo.com/oauth/v4/token"
  }
  
  public static function webhook_subscribe(){
    //POST https://api-sandbox.kopokopo.com/webhook-subscriptions
    //Accept: application/vnd.kopokopo.v4.hal+json
    //Content-Type: application/vnd.kopokopo.v4.hal+json
    //Authorization: Bearer 0Sn0W6kzNicvoWhDbQcVSKLRUpGjIdlPSEYyrHqrDDoRnQwE7Q
  }
}
