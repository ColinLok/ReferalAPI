<?php





  $database = new Database();
  $conn = $database->getConnection();

  $newUser = $_POST["create"];
  $data = json_decode($newUser,true);




  foreach($data as $item){

  if(!empty($item["email"])){
      if(!empty($item["referee"])){
        $sql ="INSERT INTO user (email,referee,ip) VALUES (\"".$item["email"] ."\",\"".$item["referee"]."\",\"".get_client_ip()."\")";

        mysqli_query($conn, $sql);
      } else {
        $sql ="INSERT INTO user (email,ip) VALUES (\"".$item["email"] ."\",\"".get_client_ip()."\")";

        mysqli_query($conn, $sql);
      }
    }

  }

  function get_client_ip() {
      $ipaddress = '';
      if (isset($_SERVER['HTTP_CLIENT_IP']))
          $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
      else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
          $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
      else if(isset($_SERVER['HTTP_X_FORWARDED']))
          $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
      else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
          $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
      else if(isset($_SERVER['HTTP_FORWARDED']))
          $ipaddress = $_SERVER['HTTP_FORWARDED'];
      else if(isset($_SERVER['REMOTE_ADDR']))
          $ipaddress = $_SERVER['REMOTE_ADDR'];
      else
          $ipaddress = 'UNKNOWN';
      return $ipaddress;
  }




  ?>
