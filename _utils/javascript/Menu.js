var menu = 0;
  $(document).on('click', function(e){
    var $this = $(e.target);
    if($this.closest('#slide').length == 0 && $this[0].id != "toggle"){
        hidemenu();
    }
  });
  function showbulle(){
    //$('.bulle').css('display','block');
    $('#bulle').toggle();
  }

  function hidebulle(){
    $('.bulle').css('display','none');
  }

  function togglemenu(){
    $('#slide').slideToggle('medium', function() {
    if ($(this).is(':visible'))
        $(this).css('display','inline-block');
    });
    if(menu==0){
      setTimeout(function () {
          menu = 1
      }, 500);
    } else {
      menu = 0;
    }
  }

  function hidemenu(){
    if(menu==1){
      $('#slide').slideToggle("medium");
      menu=0;
    }
  }
