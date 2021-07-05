var Konami = Konami || {};
var audio = new Audio('dootstar.mp3');

Konami.key = '38384040373937396665';

Konami.onCode = function(callback) {
    var input = '';
    $(document).on("keydown", function(e) {
        input += ("" + e.keyCode);
        if (input === Konami.key) {
            if(typeof callback == 'undefined') {
                return   audio.play();
            }
            else {
                return callback();
            }
        }
        if (!Konami.key.indexOf(input)) return;
        input = ("" + e.keyCode);
    });
}

Konami.offCode = function() {
    $(document).off("keydown");
}

Konami.onCode();