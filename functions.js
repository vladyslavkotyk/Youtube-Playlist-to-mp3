function getVideos(playlist) {

    $.ajax({
        url: "/app.php",
        type: "POST",
        data: {playlist: playlist},
        success: function(data) {
            data = jQuery.parseJSON(data);
                for(var k in data) {
                   var video = data[k];
                   $("#videos").append('<br><button onclick="download(this, \'' + video['url'] + '\',\'' + video['name'] + '\')">' + video['name'] + '</button>');
                }                
                
        }
    });
}

$(document).ready(function() {
  $('#button').click(function() {
    getVideos($('#playlist').val());
  });
});

function download(e, url, name) {
     var iframe = $('<iframe style="display: none;"></iframe>');
     $('body').append(iframe);
     var content = iframe[0].contentDocument;
     $(e).css("background-color","#4CAF50");
     var form = '<form action="download.php" method="GET"><input type="text" name="id" value="' + url + '"/><input type="text" name="name" value="' + name + '"/></form>';
     content.write(form);
     $('form', content).submit();
     setTimeout((function(iframe) {
       return function() { 
         iframe.remove(); 
       }
     })(iframe), 200000);
 }    
