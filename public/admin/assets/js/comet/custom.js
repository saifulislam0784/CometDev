(function($){

    $(document).ready(function(){

        // logout feature

        $(document).on('click', '#logout_btn', function(e){

            e.preventDefault();

            $('#logout_form').submit();

        });

    });

})(jQuery)
