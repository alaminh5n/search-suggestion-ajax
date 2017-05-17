<html>
    <head>
        <title>Search</title>
        <style>
            .sch{
                float: left;
            }
            .add{
                float: right;
            }
            #NameList{
                list-style:none;
                margin-top:-3px;
                padding:0;
                width:190px;
            }
            #NameList li{
                padding: 10px; 
                background: #f0f0f0; 
                border-bottom: #bbb9b9 1px solid;
            }
            #NameList li:hover{
                background:#ece3d2;
                cursor: pointer;
            }
            #search{
                padding: 10px;
                border: #a8d4b1 1px solid;
                border-radius:4px;
            }
        </style>
        <script src="jquery-3.2.0.js"></script>
        <script>
            $(document).ready(function(){
                $("#search").keyup(function(){
                    $.ajax({
                    type: "POST",
                    url: "read.php",
                    data:'keyword='+$(this).val(),
                    beforeSend: function(){
                        $("#search").css("background","#FFF no-repeat 165px");
                    },
                    success: function(data){
                        $("#search-box").show();
                        $("#search-box").html(data);
                        $("#search").css("background","#FFF");
                    }
                    });
                });
            });

            function selectName(val) {
            $("#search").val(val);
            $("#search-box").hide();
            }
        </script>
    </head>
    <body>
            <h1>Searching Suggestion</h1>
        <div class="sch">
        <center>
        <div class="frmSearch">
            <input type="text" id="search" placeholder="Search Name">
            <div id="search-box"></div>
        </div>
        </center>
        </div>
    </body>
</html>