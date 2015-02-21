//@uth0r ps48

$(document).ready(function(){

  $('.scroll').click(function() {
      $('body','html').animate({
          scrollTop: eval($('#' + $(this).attr('target')).offset().top)
      }, 1000);
  });

  $(window).scroll(function(){
      if ($(this).scrollTop() > 300) {
        $('.scrollToTop').fadeIn();
      } else {
        $('.scrollToTop').fadeOut();
      }
    });

  //Click event to scroll to top
  $('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
  });


  $("button").click(function() {
        var did =this.id;
        var content;
        if(did=='mr')
        {
            content="mr.txt";
            $("#dbcon").load("mr.txt", function(responseTxt, statusTxt, xhr){
           if(statusTxt == "success")
               alert("External content loaded successfully!");
           if(statusTxt == "error")
               alert("Error: " + xhr.status + ": " + xhr.statusText);
             });
        }
        else
        if(did=='mp')
        {
          content="mp.txt";
          alert(content);
        }
        else
        if(did=='mh')
        {
          content="mh.txt";
          alert(content);
        }
        else
        if(did=='mj')
        {
          content="mj.txt";
          alert(content);
        }
        else
        if(did=='md')
        {
          content="md.txt";
          alert(content);
        }
        else
        if(did=='mc')
        {
          content="mc.txt";
          alert(content);
        }


        $("dbcon").load(content);

  });



});
