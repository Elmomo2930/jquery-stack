
$(document).ready(function() {


  setInterval(function() {
      
   uptsObjects()

  }, 500)


  function uptsObjects()  {

     $.ajax({
           
           url: 'deploy_obj.php',

           type: 'POST',

           success: function(show_obj) {
               
               if(!show_obj.error) {
                    
                  $('#show-obj').html(show_obj)

               }
             
           }

    })
   
     
  }

  
    $('#searchin').keyup(() => {
       
       var search = $('#searchin').val()


        $.ajax({
            
           url: 'script.php',

           data: { search: search },

           type: 'POST',

           success: function(date) {
              
             if(!date.error) {
                 
                $('#results').html(date)
                
             }

           }

        })

    })


    $('#add-obj').submit((e) => {
       
       e.preventDefault()

       var postDate = $(this).serialize()

       var urls = $(this).attr('action')

       
       $.post(urls, postDate , (table_date) => {
            
           $('#obj-res').html(table_date)

           $('#add-obj')[0].reset()

       })

    })

})