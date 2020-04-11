<?php
if($_SERVER['HTTP_HOST'] == "hailey-blankenship.online")
{
  define('SERVER', 'localhost');
  define('USER', 'haileyb5_admin');
  define('PW', 'Grindstaff0205');
  define('DB', 'haileyb5_test');
}
else
{
  define('SERVER', 'localhost');
  define('USER', 'wbip');
  define('PW', 'wbip123');
  define('DB', 'test');
}
