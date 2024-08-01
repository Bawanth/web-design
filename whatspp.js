function sendToWhatsapp(){
    let number="+94762303640";

    let name=document.getElementById('name').value;
    let email=document.getElementById('email').value;
    let messge=document.getElementById('message').value;

    var url="https://wa.me/" +number+"?text="
    +"Name :" +name+ "%0a"
    +"Email :" +email+ "%0a"
    +"Message :" +messge+ "%0a%0a";

    window.open(url,'_blank').focus();
}