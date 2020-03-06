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
            try {
                respuesta = JSON.parse(xhr.response);
                console.log(respuesta);
                result.style.display = "block";
                result.value = respuesta[0].email;
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    onOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  
                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                  })               
            } catch (error) {
                console.log(error);                
            }                 
        }
    }
    //xhr.open("GET","assets/block.txt",true);
    //xhr.open("GET","ajx",true);  
    xhr.open("POST","ajx",true);   
    xhr.send(formu);
});