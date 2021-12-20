<?php 
    require 'vendor/autoload.php';

    class SendEmail{

        public static function SendMail($to,$subject,$content){
            $key = NuLL; //set key to null due to sendgrid notif

            $email = new \SendGrid\Mail\Mail();
            
            $email->setFrom("adrian.hakeem@gmail.com", "Adrian Bailey");
            $email->setSubject($subject);
            $email->addTo($to);
            $email->addContent("text/plain", $content);
           

            $sendgrid = new \SendGrid($key);

            try{
                $response = $sendgrid->send($email);
                return $response;
            }catch(Exception $e){
                echo 'Email exception Caught : '. $e->getMessage() ."\n";
                return false;
            }
        }
    }
?>