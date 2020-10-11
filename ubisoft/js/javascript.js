    $(document).ready(function () { 
      setTimeout(function () { 
        $.ajax({ url: "delete.php",
          success: function(output) {
            location.reload(true); 
         }
         
        });
      }, 30000);
    }); 