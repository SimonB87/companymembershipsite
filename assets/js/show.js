$(document).ready(function(){

  $(".ukaz0").click(function(){
    $(".polozka").hide(100);
    $(".polozka").fadeToggle(500);
  });

  $(".ukaz1").click(function(){
    $(".tab1").fadeToggle(1000);
  });

  $(".ukaz2").click(function(){
    $(".tab2").fadeToggle(1000);
  });

  $(".ukaz3").click(function(){
    $(".tab3").fadeToggle(1000);
  });

  $(".ukaz4").click(function(){
    $(".graf1").fadeToggle(1000);
  });

  $(".ukaz5").click(function(){
    $(".graf2").fadeToggle(1000);
  });

  $("#schovat").click(function() {
    $(".polozka").hide(500);
  });

});
