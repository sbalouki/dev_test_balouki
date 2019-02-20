var token = document.querySelector('input[name="_token"]').value;

function getValue () {
    return fetch('/value')
        .then((data) => {return data.json()})
}

function postIncrementsValue () {
    var params = {
        headers:{
            "content-type":"application/json;charset=UTF-8",
            'X-CSRF-TOKEN' : token
        },
        method:"POST"
    }
    return fetch("/value", params)
        .then((data) => {return data.json()})
}

module.exports = {
    getValue, postIncrementsValue
}