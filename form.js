const passwordInput = document.getElementById("password");
const click = document.getElementById("click");
const toggle = document.getElementById("toggle");
const errorMessage = document.getElementById("err");

const regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$&^&*()_+\-\[\]{};':'"\\|,.<>\/?]).{8,}$/;



toggle.addEventListener('change',()=>{
    const togglePassword = () => {
        if (passwordInput === regex) {
            click.innerText = "Show password"
            click.innerText = "Hide password"
            passwordInput.type = " "
            passwordInput.type = " "
    
        }
        if (passwordInput != regex)
        {
            errorMessage.style.color ="red"
            errorMessage.textContent = "password must be at least 8 characters including numbers and special characters"
        }
    }
togglePassword();
})