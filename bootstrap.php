<?

  $domain = $_SERVER['HTTP_HOST'];
  $arr=split('\.', $domain);
  $domain = $arr[count($arr)-1];
  if (count($arr)>1) $domain = $arr[count($arr)-2] . "." . $domain;
  $domain = "." . $domain;
  ini_set("session.cookie_domain", $domain);
