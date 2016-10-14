/**
 * Created by rober on 9/22/2016.
 */
var setTimeOutRuning = false;
var interacting_game_section = false;
var current_video = "Chobi";
var playing_fullScreen = false;
var rotateInfoMethod;
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player, iframe;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        videoId: '956G507XkV4',
        playerVars: {'controls': 0, 'rel': 0, 'showinfo': 0, 'autoplay': 0},
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    //event.target.playVideo();
    var $ = document.querySelector.bind(document);
    var player = event.target;
    iframe = $('#player');

    var video_img = document.getElementById("videoplayer-img");
    video_img.ondblclick = playFullscreen;
}

function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        // DO THIS
        interacting_game_section = true;
    } else {
        /*interacting_game_section = false;*/
        /*runSetTimeOut();*/
    }
}

// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;
var playing_video = false;

function pauseVideo() {
    if(!playing_video){
        player.playVideo();
        done = false;
        playing_video = true;
    }else {
        player.pauseVideo();
        done = true;
        playing_video = false;
    }
}

function playFullscreen() {
    player.playVideo();//won't work on mobile
    launchIntoFullscreen(document.getElementById("player"));
}

function launchIntoFullscreen(element) {
    if (element.requestFullscreen) {
        element.requestFullscreen();
    } else if (element.mozRequestFullScreen) {
        element.mozRequestFullScreen();
    } else if (element.webkitRequestFullscreen) {
        element.webkitRequestFullscreen();
    } else if (element.msRequestFullscreen) {
        element.msRequestFullscreen();
    }
}

function exitFullscreen() {
    if (document.exitFullscreen) {
        document.exitFullscreen();
    } else if (document.mozCancelFullScreen) {
        document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
        document.webkitExitFullscreen();
    }
}

function switchToChobi() {
    player.cueVideoById({videoId: "956G507XkV4"});
    done = true;
    $('#game-logo').attr("src", "assets/img/logos_juegos/logo%20choby.png");
    $('#game-descrip').text("Después de un pequeño choque, los dulces de Chobi se esparcen" +
        " por toda la galaxia, ¡Ayuda a Chobi a encontrar sus dulces y descubre un increible universo!");

    $('#ghost-game').attr("src", "assets/img/games/ghost_63px.png");
    $('#ghost-game').removeClass("game-active");
    $('#chobi-game').attr("src", "assets/img/games/chobi_90px.png");
    $('#chobi-game').addClass("game-active");

    current_video = "Chobi";
}

function switchToGhost() {
    player.cueVideoById({videoId: "OIzYMqHyNFU"});
    done = true;
    $('#game-logo').attr("src", "assets/img/logos_juegos/logoghost.png");
    $('#game-descrip').text("Después de mil años, Shardock, el emperador de la magia oscura, " +
        "ha vuelto y desatado el caos. Usando hechizos e invocaciones mágicas, Bruno, Mila y su abuelo " +
        "deberán luchar contra el apocalipsis fantasma y vencer a Shardock.");

    $('#chobi-game').attr("src", "assets/img/games/chobi_63px.png");
    $('#chobi-game').removeClass("game-active");
    $('#ghost-game').attr("src", "assets/img/games/ghost_90px.png");
    $('#ghost-game').addClass("game-active");

    current_video = "Ghost";
}

function openModal(thumbs_number) {
    $('#thumbs_modal').carousel(thumbs_number);
    $('#thumbs_modal').modal('show');
    current_thumb = thumbs_number;
    interacting_game_section = true;
}

function rotateGameInfo() {
    setTimeOutRuning = false;
    if (!interacting_game_section) {
        if (current_video == "Chobi") {
            switchToGhost();
            current_video = "Ghost";
            runSetTimeOut();
        } else {
            switchToChobi();
            current_video = "Chobi";
            runSetTimeOut();
        }
    } else {
        runSetTimeOut();
    }
}

function runSetTimeOut() {
    if (!setTimeOutRuning) {
        console.log("10 seconds");
        setTimeOutRuning = true;
        rotateInfoMethod = setTimeout(rotateGameInfo, 10000);
    }
}

function waitFiveMinutes() {
    setTimeout(function () {
        console.log("five minutes");
        interacting_game_section = false;
        setTimeOutRuning = false;
        runSetTimeOut();
    }, 300000); //300000
}

runSetTimeOut();

$('.next-btn').hover(function () {
    $("#videoplayer-img-next").css("display", "inherit");
}, function () {
    $("#videoplayer-img-next").css("display", "none");
});

$('.prev-btn').hover(function () {
    $("#videoplayer-img-prev").css("display", "inherit");
}, function () {
    $("#videoplayer-img-prev").css("display", "none");
});

$('.play-btn').hover(function () {
    $("#videoplayer-img-play").css("display", "inherit");
}, function () {
    $("#videoplayer-img-play").css("display", "none");
});

/*
$('#chobi-section').click(function () {
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    waitFiveMinutes();
});
*/

$('.prev-btn').click(function () {
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    waitFiveMinutes();
    if (current_video == "Chobi") {
        switchToGhost();
    } else {
        switchToChobi();
    }
});

$('.next-btn').click(function () {
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    waitFiveMinutes();
    if (current_video == "Chobi") {
        switchToGhost();
    } else {
        switchToChobi();
    }
});

$('.play-youtube-btn').click(function () {
    playVideo();
});

$('#play-btn').click(function () {
    playVideo();
});

$('#chobi-game').click(function () {
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    waitFiveMinutes();
    switchToChobi();
});

$('#ghost-game').click(function () {
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    waitFiveMinutes();
    switchToGhost();
});

$('#thumbs_modal').on('hidden.bs.modal', function (e) {
    /*interacting_game_section = false;*/
    runSetTimeOut();
});

function playVideo() {
    console.log("play video");
    clearTimeout(rotateInfoMethod);
    interacting_game_section = true;
    pauseVideo();
    waitFiveMinutes();
}
