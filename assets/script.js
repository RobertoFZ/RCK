/* Global Variables */
var playing = false;
var current_thumb = 0;
var currentSelectedMemeber = null;
var lateralSelectedMember = null;
/* Ends Global Variables*/

jQuery(document).ready(function ($) {

    $(".scroll a, .navbar-brand, .gototop").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 600, 'swing');
        $(".scroll li").removeClass('active');
        $(this).parents('li').toggleClass('active');
    });

    $('.thumbs').slick({
        "slidesToShow": 3,
        "slidesToScroll": 3,
        "infinite": true
    });

    adjustSlider();
    init();
    adjustComingSection();
    adjustTeamDiv();
});

$(window).load(function () {
    showVideoPlayer();
});


window.addEventListener("resize", function () {
    adjustSlider();
    adjustComingSection();
    adjustTeamDiv();
});


window.addEventListener('orientationchange', doOnOrientationChange);

$(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
        $('.gototop').show()
    }
    else {
        $('.gototop').hide();
    }
});


$('.gototop').hover(function () {
        $('#up-btn').attr("src", "assets/img/flechas_1.png");
    }, function () {
        $('#up-btn').attr("src", "assets/img/flechas_2.png");
    }
);


function adjustSlider() {
    var browser_height = $(window).height() - $('#navbar').height();
    var browser_width = $(window).width();

    if (browser_width > 1000) {
        $('#slide_1').css({
            "height": browser_height,
            "width": browser_width
        });

        $('#slide_2').css({
            "height": browser_height,
            "width": browser_width
        });
    } else {
        $('#slide_1').css({
            "height": "auto",
            "width": "auto"
        });

        $('#slide_2').css({
            "height": "auto",
            "width": "auto"
        });
    }
}

function adjustTeamDiv() {
    var team_container_height = $('#team-container').height();
    var team_container_width = $('#team-container').width();

    $('#team-info').css({
        "height": team_container_height,
        "width": team_container_width
    });

    var rck_info_height = $('#rck-info-container').height();
    var rck_info_width = $('#rck-info-container').width();

    $('#rck-info-div').css({
        "height": rck_info_height,
        "width": rck_info_width
    });
}

function adjustComingSection() {
    var browser_height = $(window).height();
    var browser_width = $(window).width();

    $('#ghostLogo-div').css({
        "height": browser_height
    });

    if (browser_height > 1080) {
        $('#ghost-descrip').css({
            "top": browser_height / 3 + "px"
        });
    } else {
        if (browser_height > 768) {
            $('#ghost-descrip').css({
                "top": browser_height / 4 + "px"
            });
        } else {
            $('#ghost-descrip').css({
                "top": browser_height / 5 + "px"
            });
        }
    }

    if (browser_width > 753) {
        $("#coming").css({
            "height": browser_height,
            "width": browser_width
        });

        $("#contact").css("height", browser_height);

        if (browser_height > 900) {
            if (browser_height >= 1200) {
                $('#chobi-section').css({
                    "height": browser_height,
                    "padding-top": "20%",
                    "padding-bottom": "5%"
                });
            } else {
                if (browser_height < 1024) {
                    if(browser_height < 700){
                        $('#chobi-section').css({
                            "height": "auto",
                            "padding-top": "5%",
                            "padding-bottom": "5%"
                        });
                    }else {
                        $('#chobi-section').css({
                            "height": browser_height,
                            "padding-top": "10%",
                            "padding-bottom": "5%"
                        });
                    }
                } else {
                    if (browser_width > 768) {
                        $('#chobi-section').css({
                            "height": browser_height,
                            "padding-top": "10%",
                            "padding-bottom": "5%"
                        });
                    } else {
                        if(browser_height < 1024){
                            $('#chobi-section').css({
                                "height": "auto",
                                "padding-top": "30%",
                                "padding-bottom": "5%"
                            });
                        }else {
                            $('#chobi-section').css({
                                "height": browser_height,
                                "padding-top": "30%",
                                "padding-bottom": "5%"
                            });
                        }
                    }
                }
            }
            $('#team-section').css("height", browser_height);
        } else {
            if (browser_height > 700) {
                $('#team-section').css("height", "900px");
                $("#ghostLogo").css({
                    "padding": "0px"
                });
                if (browser_width < 768) {
                    $('#chobi-section').css({
                        "height": "auto",
                        "padding-top": "10%"
                    });
                } else {
                    $('#chobi-section').css({
                        "height": browser_height,
                        "padding-top": "10%"
                    });
                }
            } else {
                $('#team-section').css("height", "900px");
                $("#ghostLogo").css({
                    "padding": "0px"
                });
                if (browser_width < 768) {
                    $('#chobi-section').css({
                        "height": "auto",
                        "padding-top": "10%"
                    });
                } else {
                    if (browser_height > 700) {
                        $('#chobi-section').css({
                            "height": browser_height + 150,
                            "padding-top": "10%"
                        });
                    } else {
                        if(browser_width > 700){
                            console.log("work");
                            $('#chobi-section').css({
                                "height": browser_height + 150,
                                "padding-top": "10%"
                            });
                        }else {
                            console.log("work 1");
                            $('#chobi-section').css({
                                "height": "auto",
                                "padding-top": "10%"
                            });
                        }
                    }
                }
            }
        }
    } else {
        if ($('#team-section').width() <= 750)
            $('#team-section').css("height", "auto");
        else
            $('#team-section').css("height", "900px");
        $("#coming").css({
            "height": "600px",
            "width": browser_width
        });
        if(browser_width > 600 && browser_height > 700){
            console.log("work");
            $('#chobi-section').css({
                "height": browser_height + 100,
                "padding-top": "10%"
            });
        }else {
            console.log("work 1");
            $('#chobi-section').css({
                "height": "auto",
                "padding-top": "10%"
            });
        }
    }

}

function init() {
    addHoverListeners('home', 'start-nav');
    addHoverListeners('chobi-section', 'games-nav');
    addHoverListeners('proximamente', 'coming-nav');
    addHoverListeners('team-section', 'team-nav');
    addHoverListeners('contact', 'contact-nav');


    $('.carousel').carousel({
        interval: 3000
    });

    $('#ghostLogo').click(function () {
        $('#ghostLogo').fadeOut(1000, function () {
            $('#ghost-descrip').fadeIn(1000);
        });
    });

    $('#ghostLogo').hover(function () {
        $('#ghostLogo').animate({
            "width": "55%",
            "opacity": "0.5"
        }, 500);
    }, function () {
        $('#ghostLogo').animate({
            "width": "50%",
            "opacity": "1"
        }, 500);
    });

    $('#ghostLogoSmall').click(function () {
        $('#ghost-descrip').fadeOut(1000, function () {
            $('#ghostLogo').fadeIn(1000);
        });
    });

    var ricardoImg = $('#ricardo-img');
    var ricardoInfo = $('#ricardo');
    var ricardoLateralImg = $('#ricardoLateral');
    teamMemberAnimation(ricardoImg, ricardoInfo, ricardoLateralImg);
    switchMember(ricardoLateralImg, ricardoInfo);

    var landyImg = $('#landy-img');
    var landyInfo = $('#landy');
    var landyLateralImg = $('#landyLateral');
    teamMemberAnimation(landyImg, landyInfo, landyLateralImg);
    switchMember(landyLateralImg, landyInfo);

    var misaelImg = $('#misael-img');
    var misaelInfo = $('#misael');
    var misaelLateralImg = $('#misaelLateral');
    teamMemberAnimation(misaelImg, misaelInfo, misaelLateralImg);
    switchMember(misaelLateralImg, misaelInfo);

    var julioImg = $('#julio-img');
    var julioInfo = $('#julio');
    var julioLateralImg = $('#julioLateral');
    teamMemberAnimation(julioImg, julioInfo, julioLateralImg);
    switchMember(julioLateralImg, julioInfo);

    var javiImg = $('#javi-img');
    var javiInfo = $('#javi');
    var javiLateralImg = $('#javiLateral');
    teamMemberAnimation(javiImg, javiInfo, javiLateralImg);
    switchMember(javiLateralImg, javiInfo);

}

function teamMemberAnimation(teamImgElement, infoMemberDiv, lateralImgElement) {
    var teamDiv = $('#teamdiv');
    teamImgElement.click(function () {
        currentSelectedMemeber = infoMemberDiv;
        lateralSelectedMember = lateralImgElement;
        lateralImgElement.css("opacity", "0");
        teamDiv.addClass('animated ' + 'fadeOutLeft');
        console.log("this works");
        //animationHover(teamDiv, "fadeOutLeft");
        window.setTimeout(function () {
            var teamImgs = $('#team-imgs');
            var teamInfo = $('#team-info');
            teamDiv.css("display", "none");
            teamInfo.css("display", "table-cell");
            teamImgs.addClass('animated ' + 'fadeInLeft');
            infoMemberDiv.removeClass('hide');
            infoMemberDiv.addClass('show animated ' + 'fadeInUp');
        }, 400);
    });
}

function switchMember(lateralMember, memberToSwitchDiv) {
    lateralMember.click(function () {
        lateralSelectedMember.removeAttr('style');
        lateralSelectedMember = lateralMember;
        lateralMember.css("opacity", "0");
        currentSelectedMemeber.removeClass('show animated ' + 'fadeInUp');
        currentSelectedMemeber.addClass('hide');
        memberToSwitchDiv.removeClass('hide');
        memberToSwitchDiv.addClass('show animated ' + 'fadeInUp');
        currentSelectedMemeber = memberToSwitchDiv;
    });
}

function addHoverListeners(section_id, nav_item) {
    $("#" + section_id).hover(function () {
            $("#" + nav_item).addClass("active");
        },
        function () {
            $("#" + nav_item).removeClass("active");
        }
    );

}

function doOnOrientationChange() {
    adjustComingSection();
    adjustSlider();

}

function showVideoPlayer() {
    $('#video-container').css("display", "inherit");
    console.log("full load");
}

function validateForm() {
    var emailFilter = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$/;
    var errors = [];
    nombre = $('#nombre').val();
    correo = $('#correo').val();
    rol = $('#rol').val();
    mensaje = $('#mensaje').val();

    if (nombre == "") {
        errors.push($('#nombre'));
    }

    if (correo == "") {
        errors.push($('#correo'));
    }

    if (!emailFilter.test(correo)) {
        $('#email-msg-error').css("display", "block");
        /*
         setTimeout(function () {
         $('#email-msg-error').css("display", "none");
         }, 10000);
         */
        errors.push($('#correo'));
    }

    if (rol == "") {
        errors.push($('#rol'));
    }

    if (mensaje == "") {
        errors.push($('#mensaje'));
    }

    if (errors.length > 0) {
        for (var i = 0; i < errors.length; i++) {
            errors[i].css("border", "1px solid red");
            if (errors[i] == $('#correo')) {
                $('#email-msg-error').css("display", "block");
            }
        }
        $('.error-form').css("display", "inherit");
    } else {
        var v = grecaptcha.getResponse();
        if (v.length != 0) {
            $.ajax({
                url: 'email.php',  //Server script to process data
                type: 'post',
                //Ajax events
                success: function (data) {
                    $('#nombre').val("");
                    $('#correo').val("");
                    $('#rol option:eq(1)');
                    $('#mensaje').val("");
                    $('#email-msg').css('display', 'block');
                    setTimeout(function () {
                        $('#email-msg').css('display', 'none');
                    }, 10000);
                    //swal("Mensaje enviado con éxito", "", "success");
                    grecaptcha.reset();
                },
                error: function (message) {
                    console.log(message);
                },
                // Form data
                data: {
                    'nombre': nombre,
                    'correo': correo,
                    'rol': rol,
                    'mensaje': mensaje
                }
            });
        }else{
            alert("Por favor de verificar el captcha");
        }
    }
}










