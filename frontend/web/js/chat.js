let chat = new WebSocket('ws://yii2.adv:8080');
let username = $('.js-username').text();
//console.log($('.js-username'));
let SHOW_HISTORY = 1;
let SEND_MESSAGE = 2;

chat.onmessage = function (e) {
    $('#response').text('');
    //console.log(e);
    let response = JSON.parse(e.data);
    //console.log(response);
    $('#chatMessages').append('<div><b>' + response.username + '</b>: ' + response.message + '</div>');
    //$('#chatMessages').scrollTop($('#chatMessages').height);
};

chat.onopen = function (e) {
    console.log("Connection established!");
    chat.send(JSON.stringify({
            'username': username,
            'type': SHOW_HISTORY,
        })
    );
};


$('#sendMessage').click(function () {
    chat.send(JSON.stringify({
            'username': username,
            'message': $('#messages').val(),
            'type': SEND_MESSAGE
        })
    );
    $('#messages').val('');
});
$('#hideMessages').click(function (e) {
    $('#hiddenArea').slideToggle(500);
});