 
 // フォント
 document.getElementById("myButton").onclick = function () {
     // alert("ボタン押されたよー");
     document.getElementById("text").innerHTML = "クリックされたよー";
 }

 document.getElementById("secondButton").onclick = function () {
    // document.getElementById("secondTxt").innerHTML  = 
    // document.getElementById("secondTxt").innerHTML + "追加されたよー";

    // 文字列追記
    document.getElementById("secondTxt").innerHTML += "追加されたよー";
}

 document.getElementById("changeButton").onclick = function () {
    // document.getElementById("styleChange").style.color = "blue";
    document.getElementById("styleChange").style.display = "none";
}

 // 画像消す
 document.getElementById("imgChange").onclick = function () {
     document.getElementById("img_01").style.display = "none";
 }
 
 // フォーム
 document.getElementById("submitButton").onclick = function () {
     var name = "";
     name = document.getElementById("inputForm").value;
     document.getElementById("newMessage").innerHTML = name + "働いたら負けかな？"
 }
 
 // ニート暗号
 document.getElementById("neetWordButton").onclick = function() {
     var neetWordEntered = document.getElementById("neetWord").value;
     var neetWord = "hatarakitakunai";

     if(neetWordEntered == neetWord) {
         alert("働きたくないでござる");
     } else {
         alert("ハロワいけ");
     }
 }

var sample = ["sushi", "tenpura", "sukiyaki"];
var sampleString = "";
for (i = 0; i < sample.length; i++) {
    sampleString = sampleString + "<p>" + sample[i] + "</p>";
}
document.getElementById("sampleDiv").innerHTML = sampleString;