$(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 435) {
                    $("ul").css('background-color', '#363636');
                } else {
                    $("ul").css('background-color', 'transparent');
                }
            });
        });