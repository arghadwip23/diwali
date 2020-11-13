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
    for (var n = 0, l = str.length; n < l; n++)
    {
        var hex = Number(str.charCodeAt(n)).toString(16);
        arr1.push(hex);
    }
    return arr1.join('');
}
$(document).ready(function(){
    
  $('form').submit(function(event){
     event.preventDefault(); 
  $('form').hide();
  var name = $('#name').val();
  var value = encodeURI(name);
  var ur = "https://festivewish.herokuapp.com//wish?l4Tua='"+value+"'";
  var li = `a special massegge📧 waiting for you 
click the link below👇👇 to see it

`+ur;
var send = encodeURI(li);
  var link = `<div id='link' class='overflow-auto'><p class='text-center' id='text'>`+ur+`</p> <br><a href="whatsapp://send?text=`+send+`" data-action="share/whatsapp/share" class='btn btn-success mr-3'><i class='fab fa-whatsapp'></i></a><button id='con2' class='btn btn-primary'><i class='far fa-copy'></i></button></div>`;
  $('#con').append(link);
 $('#con2').click(function(){
     copyToClipboard('#text');
 })
  }) ; 
    
    
})//end of documents. ready
