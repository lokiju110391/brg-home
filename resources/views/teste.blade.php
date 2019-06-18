teste

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/custom.js"></script>
<script src="js/rss.min.js"></script>


http://www.tse.jus.br/rss
https://www.migalhas.com.br/rss/rss.xml
https://www.conjur.com.br/rss.xml
http://www.stf.jus.br/portal/RSS/noticiaRss.asp
https://www.youtube.com/feeds/videos.xml?channel_id=UCfO_b7sApXI23VnsljvSAJg


<script type="text/javascript">
	
    var url = 'teste-2';

    $( document ).ready(function() {

         console.log("O?I");

        var request = $.ajax({  
            url: url,
            type: "GET",
            dataType: "html",
        });

        request.done(function(data) {

            console.log(data);

        });

    });

</script>