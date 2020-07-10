<?php 


//for download pdf

        $file = 'asset.pdf';
        $filename = 'https://event.on24.com/eventRegistration/EventLobbyServlet?target=lobby20.jsp&eventid=2399516&sessionid=1&key=6BE82C8E89C767E4A2D568E28EBA84F1&eventuserid=326385137';
        header('Content-type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        @readfile($file);
    
?>
