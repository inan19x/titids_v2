<?php
session_start();
if(isset($_SESSION["netadmin"])){
?>
<body>
<big><strong>titids v0.0.1-rebuild</strong> edition</big> by Ade Ismail Isnan<br/>
<em>titids - Tiny Thick IDS</em>
<p>
System requirements:
<ul>
	<li>Suricata</li>
	<li>php-7 or later</li>
	<li>mysql-server or mariadb-server</li>
	<li>httpd or equivalent server</li>
</ul>
</p>
<table width="370px">
<tr>
<td>
Operating system: <?php echo shell_exec("uname -o");?><br/>
System name: <?php echo shell_exec("uname -n");?><br/>
Kernel release: <?php echo shell_exec("uname -r");?><br/>
</td>
<td>
&nbsp;
</td>
</tr>
</table>
<br/><br/>
</body> 
<?php
}
else{
	header("Location:../");
}
?>
