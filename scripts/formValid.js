var nomeField = document.querySelector("#nome")
var emailField = document.querySelector("#email")
var messageField = document.getElementById("mensagemField")
var sendBtn = document.querySelector("#sendButton")

var emailMatch = new RegExp(/(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/)

function validateInputs(event){
    event.preventDefault()
    if(nomeField.value.length == 0){
        document.querySelector("#validName").style.display = "flex"
        nomeField.style.border = "1px solid red"
    } else {
        document.querySelector("#validName").style.display = "none"
        nomeField.style.border = "1px solid green"
    }
    if(emailField.value.length == 0 || 
        !emailField.value.match(emailMatch))
    {
        document.querySelector("#validEmail").style.display = "flex"
        emailField.style.border = "1px solid red"
    } else {
        document.querySelector("#validEmail").style.display = "none"
        emailField.style.border = "1px solid green"
    }
    if(messageField.value.length == 0){
        document.querySelector("#validMensagem").style.display = "flex"
        messageField.style.border = "1px solid red"
    } else {
        document.querySelector("#validMensagem").style.display = "none"
        messageField.style.border = "1px solid green"
    }
}