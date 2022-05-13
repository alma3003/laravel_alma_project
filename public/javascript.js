var slider_img=document.querySelector('.peri');
var images=['peri.jpg','buzhai.jpeg','sorel.jpeg','kempir.jpg','zheztyrnak.jpg'];
var i=0;

function previous(){
  if(i<=0) i=images.length;
  i--;
  return setImg();
}

function nextimage(){
  if(i>=images.length-1) i=-1;
  i++;
  return setImg();
}

function setImg(){
  return slider_img.setAttribute('src','images/'+images[i]);
}


$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle(1000);
  });
});

function myFunction() {
  var x = document.getElementById("myDIV");
  x.querySelector(".myth").innerHTML = "Kazakh myth creatures";
}

$(document).ready(function(){
  $("h2").click(function(){
    $(this).hide();
  });
});

/*smooth scroll*/
$("[data-scroll]").on("click",function(event){
  event.preventDefault();

    var blockId=$(this).data('scroll'),
    blockOffset=$(blockId).offset().top;

   $("html,body").animate({
   scrollTop: blockOffset
 },500);
});
