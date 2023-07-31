function charSpace(){
  var a=document.getElementById('textA').value;
  alert(a.length);
}
function charWithoutSpace(){
  var a=document.getElementById('textA').value;
  var b= a.trim();
  alert(b.length);
}
function replaceSpace(){
  var a=document.getElementById('textA').value;
  var b= a.replace(" ","");
  alert(b.length);
}
function textConcat(){
 var a=document.getElementById('textA').value;
 var b=document.getElementById('textB').value;
 var c=document.getElementById('textC').value;
 var d=a.concat(' '+b,' '+c)
 document.getElementById('addtexth1').innerHTML=d;
}
function resultSlice(){
  var a=document.getElementById('textA').value;
  var b=document.getElementById('textB').value;
  var c=document.getElementById('textC').value;
  var e=a.concat(' '+b,' '+c);
  var f=document.getElementById('startNumber').value;
  var g=document.getElementById('endNumber').value;
  alert(e.slice(f,g));
}
function resultSubstr(){
 var a=document.getElementById('textA').value;
  var b=document.getElementById('textB').value;
  var c=document.getElementById('textC').value;
  var e=a.concat(' '+b,' '+c);
  var f=document.getElementById('startNumber').value;
  var g=document.getElementById('endNumber').value;
  alert(e.substr(f,g));
}
function replaceText(){
   var a=document.getElementById('textA').value;
  var b=document.getElementById('textB').value;
  var c=document.getElementById('textC').value;
  var f=document.getElementById('replacetext').value;
  var g=f.concat(' '+b,' '+c);
  document.getElementById('addtexth1').innerHTML = g.replace(a, f);
}