
const recordButton = document.getElementById("record-button");
const transcript = document.getElementById("transcript");

let recognition = new webkitSpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
recognition.lang = "en-US";

recognition.onresult = function(event) {
    let finalTranscript = "";
    let interimTranscript = "";

    for (let i = event.resultIndex; i < event.results.length; ++i) {
        if (event.results[i].isFinal) {
            finalTranscript += event.results[i][0].transcript;
        } else {
            interimTranscript += event.results[i][0].transcript;
        }
    }

    transcript.value = finalTranscript + interimTranscript;
};

recordButton.addEventListener("click", function() {
    if (recordButton.innerText === "Record") {
        recordButton.innerText = "Stop";
        recognition.start();
    } else {
        recordButton.innerText = "Record";
        recognition.stop();
    }
});