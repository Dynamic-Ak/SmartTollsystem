 function sendmail1(){
    let parms={
        name : document.getElementById("car_number").value,
        email : "9654439533ak@gmail.com",
        message : document.getElementById("distance_travelled").value, 
    }
    emailjs.send("service_jzpg39p","template_i9bnhdx",parms).then(alert("Email sent"));


} 