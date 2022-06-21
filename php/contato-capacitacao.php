<?php

require_once ('PHPMailer/class.phpmailer.php');
require 'PHPMailer/PHPMailerAutoload.php';
include('connection.php');

date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome_capacitacao'];
$email = $_POST['email_capacitacao'];
$date_email  = date('d/m/Y H:i');

$date  = date('Y-m-d');
$time  = date('H:i');
$data_completa = $date . " " . $time;

$i = 0;
          $details = array( );
          $dados = array( );

          $ip = $_SERVER['REMOTE_ADDR'];
          $teste = json_decode(file_get_contents("https://ipinfo.io/{$ip}/json"));

          foreach ($teste as $key => $object) {
               $details[$i] = $object;
               $i++;
          }

try
{
     $stmt = $conn->prepare("INSERT INTO tb_capacitacao_odontologica 
     (
		nm_contato, 
		cd_email,
		dt_envio,
		cd_ip
     )
     VALUES 
     (
		:nome, 
		:email,
		:data,
		:ip
     )");

     $stmt->bindValue(':nome',$nome);
     $stmt->bindValue(':email',$email);
     $stmt->bindValue(':data',$data_completa);
     $stmt->bindValue(':ip',$details[0]);
     $stmt->execute();

     $gid = $conn->prepare("SELECT MAX(cd_contato_capacitacao) FROM `tb_capacitacao_odontologica`");
     $gid->execute();

     $getid = $gid->fetchColumn();                              
}
catch(PDOException $Exception)
{
     throw new MyDatabaseException( $Exception->getMessage( ) , $Exception->getCode( ) );
}

$body  = "
<table border=0 cellspacing='7' cellpadding='7' >
<tr bgcolor='#f8f8f8'>
<td colspan='4'>
<center>
<font face= 'Arial, Helvetica, sans-serif' size='3'><b>Capacitação Odontológica - Uniero</b></font>
</center>
</td>
</tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Data:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$date_email."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Nome:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$nome."</font> </td></tr>

<tr bgcolor='#f8f8f8'><td><font face= 'Arial, Helvetica, sans-serif'> <b>Email:</b></font></td> 
<td><font face= 'Arial, Helvetica, sans-serif'>".$email."</font> </td></tr>";

$useragent = $_SERVER['HTTP_USER_AGENT'];
$type = (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $useragent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($useragent, 0, 4))) ? 'M' : 'C';

$mail = new PHPMailer();

     //Define os dados do servidor e tipo de conexão

     $mail->IsSMTP(); // Define que a mensagem será SMTP
     $mail->Port = 587;
     $mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
     $mail->SMTPAuth = true; // Autenticação
     $mail->Username = 'email@emai.com'; // Usuário do servidor SMTP
     $mail->Password = 'senha'; // Senha da caixa postal utilizada
     $mail->SMTPSecure = 'tls';    // SSL REQUERIDO pelo GMail
     
     //Define o remetente
     $mail->From = "email@emai.com";
     $mail->FromName = "Uniero";

     $mail->AddAddress('email@emai.com', 'Uniero');
     $mail->AddBCC('email@emai.com', 'Summer');
     //$mail->AddCC('bcc@summercomunicacao.com.br', 'Copia Oculta');

     //Define os dados técnicos da Mensagem
     $mail->IsHTML(true); // Define que o e-mail será enviado como HTML
     $mail->CharSet = 'UTF-8'; // Charset da mensagem (opcional)

     //Texto e Assunto
     $mail->Subject  = $type . ' | UNIERO | Pedido de Capacitação Odontológica - Nº '.$getid; // Assunto da mensagem
     $mail->Body = $body;
     $mail->AltBody  = $type . ' | UNIERO | Pedido de Capacitação Odontológica - Nº '.$getid;

     //Envio da Mensagem
     $enviado = $mail->Send();

     //Limpa os destinatários e os anexos
     $mail->ClearAllRecipients();
     $mail->ClearAttachments();

     if($enviado){
          echo "1";
     }
     else
     {
          echo "0";
     }

?>
