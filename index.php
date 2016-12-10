<?php
  
  require_once('flight/Flight.php');
  //require_once('config.php');
  
  //Flight::path('controller');  // for autoloading of classes
  //Flight::path('model');

  // essentially just a health check endpoint
  Flight::route('/', function() {
    Flight::json(array('success' => TRUE));
  });

  Flight::route('/deploy', function() {
      
      $request = Flight::request();
      $post = $request->data;

      //$post->token;

      /*
      token=gIkuvaNzQIHg97ATvDxqgjtO
      team_id=T0001
      team_domain=example
      channel_id=C2147483705
      channel_name=test
      user_id=U2147483697
      user_name=Steve
      command=/weather
      text=94070
      response_url=https://hooks.slack.com/commands/1234/5678
      */

      Flight::json(
        array(
          'text' => "This is a successful test text."
        )
      );
  });

  Flight::start();
