<html>
        <head></head>
        <title>AnonChat</title>
        <body onload="Autoscroll();">
                <div>
                        <link type="text/css" rel="stylesheet" href="Stylesheet.css">
                        <img class="direction" src="/src/images/anon chat neon.png" width="320" height="200">
                        <div class="textContainer">
                               
                                <?php
                                        
                                        while(TRUE){
                                                $serverID = file_get_contents("src/messageHandler/id.txt");
                                                sleep(1);
                                        }
                                ?>			
                                
                                <script> 
                                            
                                        var serverId = Number("<?php echo $serverID; ?>");
                                        var clientId=0;
                                        var x=true;
                                        const task = async () => {
                                                while(x) {
                                                        
                                                        var serverId = Number("<?php echo $serverID; ?>");
                                                        await new Promise(r => setTimeout(r, 1000));
                                                        if(clientId!=serverId){
                                                        
                                                                console.log("differentID")
                                                                clientId=serverId;
                                                                window.location.reload()
                                                                
                                                        }else{
                                                                console.log("sameID");
                                                        }
                                                };
                                        }
                                        
                                </script>



                                    
                                
                                      <iframe id="GFG" src = "/src/messageHandler/message.txt" width = "100%" height = "100%"style="border: 0px">
                                        Sorry your browser does not support inline frames. Use GNU IceCat.
                                      </iframe>

                                      

                        </div>

                      

                            




                            <script>
                                function Autoscroll() { // this is good
                                var iframeID = document.getElementById("GFG");

                                var iframeCW = (iframeID.contentWindow || iframeID.contentDocument);
                                document.getElementById('GFG').onload = function(){ setTimeout("document.getElementById('GFG').contentWindow.scrollTo(0, 99999999)", 1) }
                                if (iframeCW.document) iframeCW = iframeCW.document;
                                iframeCW.body.style.color = "white";
                                }
                           </script>
                           <script>
                                Autoscroll();
                            </script>
                        <form method="POST" action="src/messageHandler/submit.php">

                                <input name="message" placeholder="Isn't avian so pog?!" type="text">
                                <button type="submit" value="submit">Send</button>
                        </form>
                      
                </div>
        </body>

</html>

