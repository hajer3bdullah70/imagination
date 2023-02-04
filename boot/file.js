const SpeechRecognition =
  window.SpeechRecognition || window.webkitSpeechRecognition;
const SpeechNewRecog = new SpeechRecognition();

const API_KEY = "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";

var startbtn = document.querySelector(".start");
var stopbtn = document.querySelector(".stop");
var speech = new SpeechSynthesisUtterance();

function speak(command) {
  var speech = new SpeechSynthesisUtterance();
  speech.text = command;
  speech.volume = 1;
  window.speechSynthesis.speak(speech);
}

startbtn.addEventListener("click", () => {
  SpeechNewRecog.start();
});

stopbtn.addEventListener("click", () => {
  SpeechNewRecog.stop();
  window.speechSynthesis.cancel();
});

SpeechNewRecog.onstart = function () {
  window.speechSynthesis.cancel();
  var status = document.querySelector(".statius");
  status.innerHTML = "Listening...";

  var Question = document.querySelector(".Question");
  Question.innerHTML = "";

  var Answer = document.querySelector(".Answer");
  Answer.innerHTML = "";
};

SpeechNewRecog.onend = function () {
  var status = document.querySelector(".statius");
  status.innerHTML = "";
};
SpeechNewRecog.onresult = function (event) {
  var current = event.resultIndex;
  var usercommand = event.results[current][0].transcript;
  var Question = document.querySelector(".Question");
  Question.innerHTML = usercommand;

  speech.volume = 10;
  speech.rate = 0.8;
  speech.pitch = 1;

  var mainusercommand = usercommand.toLowerCase();
  var generatedText;
  if (mainusercommand.includes("name") && mainusercommand.includes("what")) {
    var Answer = document.querySelector(".Answer");
    generatedText = "My name is Faisal";
    Answer.innerHTML = generatedText;
    speech.text = generatedText;
    window.speechSynthesis.speak(speech);
  } else if (
    mainusercommand.includes("winners") &&
    mainusercommand.includes("alibaba")
  ) {
    var Answer = document.querySelector(".Answer");
    generatedText = "imagination Team";
    Answer.innerHTML = generatedText;
    speech.text = generatedText;
    window.speechSynthesis.speak(speech);
  } else {
    fetch("https://api.openai.com/v1/engines/text-davinci-002/completions", {
      method: "post",
      headers: {
        "Content-Type": "application/json",
        Authorization: "Bearer " + API_KEY,
      },
      body: JSON.stringify({
        prompt: usercommand,
        max_tokens: 4000,

        //stream: true,
      }),
    })
      .then((response) => {
        return response.json();
      })
      .then((data) => {
        generatedText = data.choices[0].text;
        var Answer = document.querySelector(".Answer");

        Answer.innerHTML = generatedText;
        speech.text = generatedText;
        window.speechSynthesis.speak(speech);
      })
      .catch((error) => {
        console.error(error);
      });
  }
};
