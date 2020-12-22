console.log('hello world');
function copyToClipboard(element) {
        var $temp = $("<input>");
        $("body").append($temp);
        $temp.val($(element).text()).select();
        document.execCommand("copy");
        $temp.remove();
        alert('link copied now share the link with your friends');
    }

function a(str)
{
    var arr1 = [];
    let reg = /,/g;
    for (var n = 0, l = str.length; n < l; n++)
    {
        var hex = str.charCodeAt(n);
        arr1.push(hex);
    }
    var hexavalue = arr1.join();
   return hexavalue.replace(reg,'Q7');
}

$(document).ready(function(){
    
  $('form').submit(function(event){
     event.preventDefault(); 
  $('form').hide();
  var name = $('#name').val();
  var valueb = a(name);
  var test = b(valueb);
  var value = encodeURI(valueb);
  var ur = "https://festivewish.herokuapp.com//wish?l4Tua="+value;
  var li = `a special massegge📧 is sent by ${name} 
  
  click the link below👇👇 to see it

`+ur;
var send = encodeURI(li);
  var link = `<div id='link' class='overflow-auto'><p class='text-center' id='text'>`+ur+`</p> <br><a href="whatsapp://send?text=`+send+`" data-action="share/whatsapp/share" class='btn btn-success mr-3'><i class='fab fa-whatsapp'></i></a><button id='con2' class='btn btn-primary'><i class='far fa-copy'></i></button>${test} <br /></div>`;
  $('#con').append(link);
 $('#con2').click(function(){
     copyToClipboard('#text');
 })
  }) ; 
    
    
})//end of documents. ready
