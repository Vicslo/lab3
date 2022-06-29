<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<button type="button" onclick="GG()">2222</button>
<div id="table">

</div>
<script src='jquery-3.6.0.min.js'>
</script>
<script type="text/javascript">
var arr = [{name:'user1', age:'25'},{name:'user2', age:'26'},{name:'user3', age:'27'}];
//var arr={name:'user1', age:'25'};
  function GG()
  {
    var json = JSON.stringify(arr);
    alert(json);

    $.ajax({
            method: "POST",
            url: "and_another.php",
            data: {json:json},
            success: function (data) {
              $("#table").html("");
                 $("#table").html(data);
      
            //  alert(data)
            }
            });



  };
</script>
  </body>
</html>
