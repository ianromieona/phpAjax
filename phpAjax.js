(function ( $ ) {
 
    $.fn.phpAjax = function(options) {
        form = $(this)
        form.find('input[data-button="submit"]').on('click',function(){
            formData = form.serialize()
            $.ajax({
                url:  options.url,
                type: options.method,
                data: formData,
                success:function(data){
                    $(options.result).text(options.successNote);
                },
                error:function(){
                    $(options.result).text(options.errorNote);
                },
            })

        })
    };

 
}( jQuery ));