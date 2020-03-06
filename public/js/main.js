console.log('...');
var form1 = document.querySelector("#form1");
var result = document.querySelector("#result");

form1.addEventListener("submit",(e)=>{
    e.preventDefault();
    var formu = new FormData(form1);
    //console.log(formu.get('email'));
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if(xhr.readyState === 3){
            console.log('waiting...');
        }
        if(xhr.readyState === 4  && xhr.status === 200){
            respuesta = JSON.parse(xhr.response);
            console.log(respuesta[0].email);
            result.style.display = "block";
            result.value = respuesta[0].email;
        }
    }
    //xhr.open("GET","assets/block.txt",true);
    //xhr.open("GET","ajx",true);  
    xhr.open("POST","ajx",true);   
    xhr.send(formu);
});