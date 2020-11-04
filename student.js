function validator()
{
var x=document.forms["myForm"]["name"].value;
var name=x.trim();
if (name==null || name=="")
{
  alert("Please enter first name");
  return false;
}

var checkOnlyChars = /^[A-Za-z]+$/;
if(!name.match(checkOnlyChars))
{
	alert("Only chars are allowed");
	return false;
}

if (x.length > 30)
{
  alert("Maximum length of name is 30");
  return false;
}  

 
var x=document.forms["myForm"]["id"].value;
if (x==null || x=="")
{
  alert("Please ID");
  return false;
}

if (x.length > 11)
{
  alert("Maximum length of phone number is 11");
  return false;
}  

var numericExpression = /^[0-9]+$/;
if(!x.match(numericExpression))
{
	alert("Only numerics are allowed");
	return false;
}
var x=document.forms["myForm"]["email"].value;
var at=x.indexOf("@");
var dot = x.lastIndexOf(".");
if(x.length>=50)
{
  alert("Please enter valid e-mail ID");
  return false;
}
if (at<1 || dot<=at+2 || dot+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }

var x=document.forms["myform"]["city"].value;
x=x.trim();
if (x==null || x=="")
{
  alert("Please enter city name");
  return false;
}
var x=document.forms["myform"]["state"].value;
x=x.trim();
if (x==null || x=="")
{
  alert("Please enter state name");
  return false;
}

}

function getId()
{
	var x=document.forms["myForm"]["id"].value;
if (x==null || x=="")
{
  alert("Please ID");
  return false;
}
var numericExpression = /^[0-9]+$/;
if(!x.match(numericExpression))
{
	alert("Only numerics are allowed");
	return false;
}

}