<?php
    if(isset($_POST['Contact Me']))
    {
        $Name = $_POST['Name'];
        $EmailID = $_POST['EmailID'];
        $Subject = $_POST['Subject'];
        $project = $_POST['project'];


        $mailTo = "sanyam0605@gmail.com";
        $headers = "From:".$EmailID;
        $txt = "You have receieved an e-mail from".$Name.".\n\n".$project;

        mail($mailTo,$Subject,$txt,$headers);
        header("Location: index.php?mailsend");
    }

?>