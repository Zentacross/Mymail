function strength(){
	  var p=document.getElementById('passww').value;
	  var len=p.length;
	  var ppp=document.getElementById('password1');
	  if((len<6)&&(len>0)){
	  var myValue='<font color=red>Weak</font>';}
		  else if((len>=6)&&(len<9)){
	  var myValue='<font color=blue>Medium</font>';}
	  else if(len>=9){
	  var myValue='<font color=green>Strong</font>';}
	  else {
		  var myValue='<font color=red>Please enter a password!</font>';}
		  ppp.innerHTML=myValue;
		  return;
  } 
  function strength1(){
	  var p1=document.getElementById('passww1').value;
	  var len1=p1.length;
	  var ppp1=document.getElementById('password11');
	  if((len1<6)&&(len1>0)){
	  var myValue1='<font color=red>Weak</font>';}
		  else if((len1>=6)&&(len1<9)){
	  var myValue1='<font color=blue>Medium</font>';}
	  else if(len1>=9){
	  var myValue1='<font color=green>Strong</font>';}
	  else {
		  var myValue1='<font color=red>Please enter a password!</font>';}
		  ppp1.innerHTML=myValue1;
		  return;
  }