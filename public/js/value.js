var token = document.querySelector('input[name="_token"]').getAttribute('value');
var valueHtml = document.getElementById('value');

function setValue (value) {
    valueHtml.innerHTML = value;
}

function getValue () {
    fetch('/value')
        .then((data) => {return data.json()})
        .then((data) => setValue(data.value))
}

function incrementValue () {
    var params = {
        headers:{
            "content-type":"application/json;charset=UTF-8",
            'X-CSRF-TOKEN' : token
        },
        method:"POST"
    }
    fetch("/value", params)
        .then((data) => {return data.json()})
        .then((data) => setValue(data.value))
}
  
// Execute on load
getValue ()