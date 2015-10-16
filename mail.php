<?php /* mail('andyuxui@gmail.com', 'The Magical Subject Line', 'The Magical Body'); */ ?>

<?php
  echo "<h2>Testing Postfix...</h2>";
  $to = 'andyuxui@gmail.com';
  $subject = 'This is the subject!';
  $body = 'This is the email body.';
  $from = 'From: From Address <andyuxui@gmail.com>' . "\r\n";
  $option = "-ffrom.andyuxui@gmail.com";
  mail($to, $subject, $body, $from, $option);
?>
