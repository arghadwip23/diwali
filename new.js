console.log('hello world');
//function for copyToClipboard
function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert('link copied now share the link with your friends');
    }

$(document).ready(function(){
  $('form').submit(function(event){
     event.preventDefault(); 
  $('form').hide();
  var name = $('#name').val();
  var encode = window.btoa(name);
  var value = encodeURI(encode);
  var ur = window.location.href+"wish?l4Tua="+value;
  var li = `a special massegge📧 is sent by *${name}* 
  
  click the link below👇👇 to see it

${ur}`;

var send = encodeURI(li);
  var link = `<div id='link' class='overflow-auto'><p class='text-center' id='text'>`+ur+`</p> <br><a href="whatsapp://send?text=`+send+`" data-action="share/whatsapp/share" class='btn btn-success mr-3'><i class='fab fa-whatsapp'></i></a><button id='con2' class='btn btn-primary'><i class='far fa-copy'></i></button></div>`;
  $('#con').append(link);
 $('#con2').click(function(){
     copyToClipboard('#text');
 })
  }) ; 
    
    
})//end of documents. read
