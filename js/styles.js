
$(function(){

    $('#next_items').click(function(){
        if($('#next_items').hasClass('s3')){
            $('#steven_acord #item3').removeClass('d-none')         
            $('#steven_acord #item2').addClass('d-none')
            $('#steven_acord #item1').addClass('d-none')
            $('#next_items').removeClass('s3')
            $('#next_items').addClass('s4')
            $('.nav .nav-item2').removeClass('bg-warning')
            $('.nav .nav-item3').addClass('bg-warning')
        }else{
            $('#steven_acord #item1').addClass('d-none')
            $('#steven_acord #item2').removeClass('d-none')            
            $('#next_items').addClass('s3')
            $('#return_items').attr('disabled', false)
            $('.nav .nav-item2').addClass('bg-warning')
            $('.nav .nav-item1').removeClass('bg-warning')
        }

        if($('#next_items').hasClass('s4')){
            $('#next_items').attr('disabled', true)
            $('#next_items').removeClass('s4')
        }

        
    })

    $('#return_items').click(function(){
        if($('#next_items').hasClass('s3')){
            $('#steven_acord #item1').removeClass('d-none')
            $('#steven_acord #item2').addClass('d-none')
            $('#return_items').attr('disabled', true) 
            $('#next_items').removeClass('s3')
            $('.nav .nav-item1').addClass('bg-warning')
            $('.nav .nav-item2').removeClass('bg-warning')
        }else{
            $('#steven_acord #item3').addClass('d-none')
            $('#steven_acord #item2').removeClass('d-none')
            $('#next_items').attr('disabled', false)
            $('#next_items').addClass('s3')
            $('.nav .nav-item3').removeClass('bg-warning')
            $('.nav .nav-item2').addClass('bg-warning')
        }

        
    })

})