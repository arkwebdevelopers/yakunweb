<?php
extract($_POST);
// configuration
$mailto="mujeeb1238@gmail.com,farhad1238@gmail.com";//"saiphani4@gmail.com,safeformulations@gmail.com,safeparenterals@yahoo.co.in";
if(isset($sendmail))
{
	$subject="Feed Back";
	$message="<html><body><table width='75%' border='0'>
  <tr> 
    <td colspan='3'><img src='http://www.tutorialstrust.com/images/logo.gif'></td>
  </tr>
  <tr> 
    <td width='10%'>&nbsp;</td>
    <td align='center'><table width='100%' border='0'>
        <tr> 
          <td colspan='2'>
				<p><h3>Contact Form Details</h3><br><br>
				Name of the company		   					:   $nameofthecompany <br>
				E-mail id									:   $email<br>
				Telephone no		    					:	$telephoneno<br><br>
				
				Products interested on        				:	$productsinterestedon<br>
				Whether interested on 						:	$whetherinterestedon<br>
				Loan license thirdparty 					:	$loanlicensethirdparty<br>
				Any additional specific facility you require:	$anyadditionalspecificfacilityyourequire<br><br>
				
				Remarks 									:	$remarks<br>
				
				</p>
			</td>
        </tr>
      </table></td>
    <td width='10%'>&nbsp;</td>
  </tr>
  <tr> 
    <td colspan='3'>&nbsp;</td>
  </tr>
</table></body></html>";	
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";	
	$headers .= 'From: info@tutorialstrust.com' . "\r\n" .
				'Reply-To: tutorialstrust.com <info@www.tutorialstrust.com>' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();								
	mail($mailto,$subject,$message,$headers);
	header("Location:contact-us.php?msg=1");
	exit();
}
?>
