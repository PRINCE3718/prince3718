function clr()
{
    document.getElementById("result").value="";
}

function display(val)
{
    document.getElementById("result").value+=val;
}

function result()
{
    let a=document.getElementById("result").value;
    let b=eval(a);
    document.getElementById(result).value=b;
}