   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
   

                <p> Copy personalised link below on blog or any social platform.</p>
               
                    <input type="text" id="selectable2" class="form-control2" value=""/>
               
                    <button id="demo" class="btn btn-primary btn-sm" value="copy" onclick="copyToClipboard(document.getElementById('selectable2'))">Copy</button>
                
			
 <script>
            function copyToClipboard(element) {
                var $temp = '';
                var $temp = $("<input>");
                $("body").append($temp);
                $temp.val($(element).val()).select();
                document.execCommand("copy");
                $temp.remove();
                 myFunction();
            }
        </script> 
        
        <script>
            function myFunction() {
            document.getElementById("demo").innerHTML = "Copied";
                        
        }
        </script>			
			
			