<?php
$email = $_POST["email"];
// $servername = "127.0.0.1";
// $username = "root";
// $password = "";
// $databaseName = "apitest";
// $conn = mysqli_connect($servername, $username, $password,$databaseName);
// // Create connection
//
//
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// $sql = "SELECT * FROM `user` WHERE emails = \"".$email."\"";
//
//
//
//
// if ($res = mysqli_query($conn, $sql)) {
//     if (mysqli_num_rows($res) > 0) {
//         while ($row = mysqli_fetch_array($res)) {
//           $encryptedEmail = encrypt($email);
//           echo "Your reference link is: localhost/project/signup.php?i=" . $encryptedEmail;
//         }
//     } else {
//       echo "Email does not exist";
//     }
//   }

  function encrypt($string, $key = 'mykey', $secret = 'SecretKey', $method = 'AES-256-CBC') {
    // hash
    $key = hash('sha256', $key);
    // create iv - encrypt method AES-256-CBC expects 16 bytes
    $iv = substr(hash('sha256', $secret), 0, 16);
    // encrypt
    $output = openssl_encrypt($string, $method, $key, 0, $iv);
    // encode
    return base64_encode($output);
}
echo "Your link is:http://localhost/project/signup.php?i=". encrypt($email);


?>
