$(function() {

// Initializes and creates emoji set from sprite sheet

    // Finds all elements with `emojiable_selector` and converts them to rich emoji input fields
    // You may want to delay this step if you have dynamically created input fields that appear later in the loading process
    // It can be called as many times as necessary; previously converted input fields will not be converted again
    $(".contents-wrapper").niceScroll();
    $(".pre-comments").niceScroll();
    $("#offCanvasLeft").niceScroll();



// Country mode selection script

    function DropDown(el) {
        this.dd = el;
        this.initEvents();
    }

    $(".menu-icon").on("click", function(){
        $(".contents-wrapper").getNiceScroll().hide();

    })

    DropDown.prototype = {
        initEvents: function () {
            var obj = this;

            obj.dd.on('click', function (event) {
                $(this).toggleClass('active');
                event.stopPropagation();
            });
        }
    }


    var dd = new DropDown($('#dd'));

    $(document).click(function () {
        // all dropdowns
        $('.wrapper-dropdown-5').removeClass('active');
    });

    var movie_ajax;
    var comedy_ajax;
    var clips_ajax;
    var tv_ajax;
    var ajax = [];
    ajax['movies'] = function(){

        movie_ajax = $.ajax({
            url: "http://localhost:8080/index.php/movies",
            type: 'post',
            success: function (data) {
                if (data) {
//add returned data to DOM
                    movies = $.parseJSON(data);
                    $.each(movies, function (index, value) {
                        movie_name = value.name;
                        movie_path = value.movie_path;
                        movie_thumbnail = value.thumbnail_path;
                        movie_description = value.description;
                        added_date = value.added_date;
                        poster_thumbnail = value.poster_thumbnail;
                        movie_likes = value.likes;
                        movie_views = value.views;
                        movie_id = value.id;
                        poster_image = value.poster_image;
                        release_year = "Watch Now!";
                        movie_rating = value.rating;
                        movie_status = value.status;
                        if (movie_status == "new") {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> <div class="large-5 small-5 medium-5 columns sticker"></div> </div>';
                        }
                        else {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> </div>';
                        }
                        $(".media-container").append(to_append);
                    })


                    //remove loader
                    $('.loader').fadeTo('slow', 0).css('display', 'none'), function () {
                        $('.container').fadeTo('slow', 1), function () {

                        }

                    }

                    $(".content").each(function (i) {
                        $(this).delay(100 * i).fadeTo('slow', 1);
                    });
                }
            }
        });

    }

    ajax['comedy'] = function(){
        comedies_ajax = $.ajax({
            url: "http://localhost:8080/index.php/movies",
            type: 'post',
            success: function (data) {
                if (data) {
//add returned data to DOM
                    movies = $.parseJSON(data);
                    $.each(movies, function (index, value) {
                        movie_name = value.name;
                        movie_path = value.movie_path;
                        movie_thumbnail = value.thumbnail_path;
                        movie_description = value.description;
                        added_date = value.added_date;
                        poster_thumbnail = value.poster_thumbnail;
                        movie_likes = value.likes;
                        movie_views = value.views;
                        movie_id = value.id;
                        poster_image = value.poster_image;
                        release_year = "Watch Now!";
                        movie_rating = value.rating;
                        movie_status = value.status;
                        if (movie_status == "new") {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> <div class="large-5 small-5 medium-5 columns sticker"></div> </div>';
                        }
                        else {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> </div>';
                        }
                        $(".media-container").append(to_append);
                    })


                    //remove loader
                    $('.loader').fadeTo('slow', 0).css('display', 'none'), function () {
                        $('.container').fadeTo('slow', 1), function () {

                        }

                    }

                    $(".content").each(function (i) {
                        $(this).delay(100 * i).fadeTo('slow', 1);
                    });
                }
            }
        });
    }

    ajax['clips'] = function(){
        clips_ajax = $.ajax({
            url: "http://localhost:8080/index.php/movies",
            type: 'post',
            success: function (data) {
                if (data) {
//add returned data to DOM
                    movies = $.parseJSON(data);
                    $.each(movies, function (index, value) {
                        movie_name = value.name;
                        movie_path = value.movie_path;
                        movie_thumbnail = value.thumbnail_path;
                        movie_description = value.description;
                        added_date = value.added_date;
                        poster_thumbnail = value.poster_thumbnail;
                        movie_likes = value.likes;
                        movie_views = value.views;
                        movie_id = value.id;
                        poster_image = value.poster_image;
                        release_year = "Watch Now!";
                        movie_rating = value.rating;
                        movie_status = value.status;
                        if (movie_status == "new") {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> <div class="large-5 small-5 medium-5 columns sticker"></div> </div>';
                        }
                        else {
                            to_append = '<div class="content large-2 small-4 medium-3"><input type="hidden" class="poster-image" value="' + poster_image + '"/><input type="hidden" class="date" value="' + added_date + '"/><input type="hidden" class="description" value="' + movie_description + '"/><input type="hidden" class="poster" value="' + poster_thumbnail + '"/><input type="hidden" class="id" value="' + movie_id + '"/><input type="hidden" class="name" value="' + movie_name + '"/><input type="hidden" class="path" value="' + movie_path + '"/><input type="hidden" class="likes" value="' + movie_likes + '"/><input type="hidden" class="views" value="' + movie_views + '"/><img src="' + movie_thumbnail + ' " class="thumbnails"/> </div>';
                        }
                        $(".media-container").append(to_append);
                    })


                    //remove loader
                    $('.loader').fadeTo('slow', 0).css('display', 'none'), function () {
                        $('.container').fadeTo('slow', 1), function () {

                        }

                    }

                    $(".content").each(function (i) {
                        $(this).delay(100 * i).fadeTo('slow', 1);
                    });
                }
            }
        });
    }



    $(document.body).on('click', '.comedy' ,function() {
        if(typeof movie_ajax !== 'undefined'){
            movie_ajax.abort();

        }
        if(typeof clips_ajax !== 'undefined'){
            clips_ajax.abort();

        }
        $('.media-container').html('');
        $(".loader").css("display", "block");
        $(".loader").css("opacity", 1);
        $('.movies').css('background-image', 'url("http://localhost:8080/public/images/movie_icon.png")');
        $(this).css('background-image', 'url("http://localhost:8080/public/images/comedy_icon_selected.png")');
        $('.videoclips').css('background-image', 'url("http://localhost:8080/public/images/clips_icon.png")');



        ajax['comedy']();


    });

    ajax['movies']();


    $(document.body).on('click', '.movies' ,function() {
        if(typeof comedies_ajax !== 'undefined'){
            comedies_ajax.abort();

        }
        if(typeof clips_ajax !== 'undefined'){
            clips_ajax.abort();

        }
        // tv_ajax.abort();
        $('.media-container').html('');
        $(".loader").css("display", "block");
        $(".loader").css("opacity", 1);
        $(this).css('background-image', 'url("http://localhost:8080/public/images/movie_icon_selected.png")');
        $('.comedy').css('background-image', 'url("http://localhost:8080/public/images/comedy_icon.png")');
        $('.videoclips').css('background-image', 'url("http://localhost:8080/public/images/clips_icon.png")');


        ajax['movies']();
    });


    $(document.body).on('click', '.videoclips' ,function() {
        if(typeof comedies_ajax !== 'undefined'){
            comedies_ajax.abort();

        }
        if(typeof movie_ajax !== 'undefined'){
            movie_ajax.abort();

        }

        //tv_ajax.abort();
        $('.media-container').html('');
        $(".loader").css("display", "block");
        $(".loader").css("opacity", 1);
        $(this).css('background-image', 'url("http://localhost:8080/public/images/clips_icon_selected.png")');
        $('.comedy').css('background-image', 'url("http://localhost:8080/public/images/comedy_icon.png")');
        $('.movies').css('background-image', 'url("http://localhost:8080/public/images/movie_icon.png")');


        ajax['clips']();
    });


$("#sign").on("submit", function(e){
    e.preventDefault();

    var suser = $("#susername").val();
    var spassword = $("#spassword").val();

    $.ajax({
        url: "http://localhost:8080/index.php/account/login",
        type: 'post',
        data:{susername:suser, spassword:spassword},
        success: function (data) {
if(data==1){
location.reload();
}
            else{
    $("#status").html(data);
}
        }
    });
})


    //BG_info reveal from thumbnail on hover
    $(document.body).on('click', '.content' ,function(){



        $(".load-section").css("display","block");


        var id = $(this).find(".id").val();
        var temp = '<input type="hidden" class="movie_id" value="'+id+'" />';
        $(".comment-area").append(temp);
        var description = $(this).find(".description").val();
        if(description.length > 168){
            description = description.substring(0, 170);
            description = description + "...";
        }

        var added_date = $(this).find(".date").val();

        var path = $(this).find(".path").val();
        var poster_image = $(this).find(".poster-image").val();
        var thumbnail = $(this).find(".poster").val();
        var views = $(this).find(".views").val();
        var likes = $(this).find(".likes").val();
        var name = $(this).find(".name").val();
        $(".poster-image").attr("src", poster_image);

        $(".video-title").html(name);
        $(".video-description").html(description);
        $(".video-postdate").html(added_date);

        likes = " " + likes;
        views = " " + views;
        $(".likes-value").html(likes);
        $(".views-value").html(views);

        $.ajax({
            url: "http://localhost:8080/index.php/comments",
            data:{id:id},
            type: 'post',
            success: function (data) {
                if(data){
                    comment = $.parseJSON(data);
                    $.each(comment, function(index, value) {
                        comment_data = value.data;
                        comment_data = emojione.toImage(comment_data);
                        commenter = value.commenter + ': ';
                        comment_time = value.time;
                        var append = '<div class="large-12 small-12 medium-12 single-comment"> <span class="commenter-name">'+commenter+' </span>'+comment_data+'<br> <span class="commenter-date">'+comment_time+'</span> </div>';
                        $(".load-section").css("display","none");
                        $(".comments").append(append);
                    });

                }
            }
        });

       

        $("#my-video_html5_api > source").attr('src', path);
        $("#my-video_html5_api").attr('poster', thumbnail);
        $("#my-video").attr('poster', thumbnail);
        $('.vjs-poster').css('background-image', 'url(' + thumbnail + ')');

        $("#my-video_html5_api").load();


        $(".contents-wrapper").getNiceScroll().hide();

        $(".media-panel").css("display","block");
    });


    $(document).on('keypress', '#comment', function(event){

        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13') {
            var comment = $('#comment').val();
            var movie_id = $(".comment-area").find(".movie_id").val();
            if (comment !== "" || comment !== NULL) {



                $.ajax({
                    url: "http://localhost:8080/index.php/comments/add",
                    data:{comment:comment, id:movie_id},
                    type: 'post',
                    success: function (data) {
                        if(data !== "Error"){
                            var commenter = data;
                            comment = emojione.toImage(comment);
                            alert(comment);
                            commenter = commenter +': ';
                            var appendex = '<div class="large-12 small-12 medium-12 single-comment"> <span class="commenter-name">'+commenter+' </span>'+comment+'<br> <span class="commenter-date">'+"Just now"+'</span> </div>';

                            $(".comments").append(appendex);
                            $('#comment').val('');

                        }
                        else{
                            $('#comment').val('');
                            var elem = new Foundation.Reveal($('#firstModal'));
                            elem.open();

                        }
                    }
                });



            }
        }
        event.stopPropagation();
    });




    $("#account-status").on('click', function(){
        if($(this).html() == "Log In"){
            var elem = new Foundation.Reveal($('#secondModal'));
            elem.open();
        }
        else{
            $.ajax({
                url: "http://localhost:8080/index.php/account/logout",
                type: 'post',
                success: function (data) {
                    location.reload();
                }
            });
        }

    })









    $(".close-reveal-modal").on('click', function(){
        $('#firstModal').foundation('close');
    });
    $('.close-button').on('click', function () {
        $(".media-panel").css("display","none");

        $(".comments").find(".single-comment").remove();

        $(".contents-wrapper").getNiceScroll().show();
        $(".pre-comments").niceScroll().hide();
        $(".comments").niceScroll().hide();
        $(".comment-area").niceScroll().hide();
        $(".comment-area").find(".movie_id").remove();

    });



    $('.media-panel').on('click', function () {
        $(".media-panel").css("display","none");


        $(".comments").find(".single-comment").remove();
        $(".contents-wrapper").getNiceScroll().show();
    }).children().on('click', function (event) {
        event.stopPropagation();
    });






    var panel = $(window).height();
    panel = panel * 0.95;
    $(".panel").css("height", panel + "px");


    $( "#favs" )
        .mouseout(function() {
            $('.tool').css('display','none');

        })
        .mouseover(function() {
            $('.tool').css('display','block');
        });
    $( "#sorter" )
        .mouseout(function() {
            $('.tool2').css('display','none');

        })
        .mouseover(function() {
            $('.tool2').css('display','block');
        });







    $(".form").submit(function(e){


        username = $("#username").val();
        email = $("#email").val();
        password = $("#password").val();
        rpassword = $("#rpassword").val();
        name = $("#fullname").val();
        var error = '';
        if(rpassword !== password){

            error = "<p>Passwords don\'t match</p>";
            e.preventDefault(e);
        }
        if(name.length>25){
            error = error + "<p>Name should be less than 25 characters</p>";
            e.preventDefault(e);
        }
        if(username.length>10){
            error = error + "<p>Username should be less than 10 characters</p>";
            e.preventDefault(e);
        }
        if(error !==''){
            $(".status").append(error);
        }
        else{
            e.preventDefault(e);

            // ajax call for registration then refresh page

            $.ajax({
                url: "http://localhost:8080/index.php/account/register",
                data:{name:name, username:username, password:password, rpassword:rpassword, email:email},
                type: 'post',
                success: function (data) {

                    if(data==1){
                        location.reload();


                    }
                    else{
                        $(".status").html("");
                        $(".status").append(data);

                    }

                }
            });


        }

    });


    $('.content').on('hover', function(){

        var rotate = $('this');
        rotate.velocity({rotateY: '20deg'});
    });
});