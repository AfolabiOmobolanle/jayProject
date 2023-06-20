const hover = document.getElementById("hover")
const button = document.getElementById("btn")

button.addEventListener("mousemove",(e) =>{
    button = e.target;  
})

button.addEventListener("mouseover",(e) =>{
       hover.textContent ="click here!" + e.target.value

})