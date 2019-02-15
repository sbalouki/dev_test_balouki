function changeValue(value)
{
    var valueHtml = document.getElementById('value');
    valueHtml.innerHTML = value;
}

fetch('/value')
  .then(
    function(response) {
      if (response.status !== 200) {
        console.log('Looks like there was a problem. Status Code: ' +
          response.status);
        return;
      }

      // Examine the text in the response
      response.json().then(function(data) {
          changeValue(data.value);
      });
    }
  )
  .catch(function(err) {
    console.log('Fetch Error :-S', err);
  });


  function incrementValue()
  {
      var token = document.querySelector('input[name="_token"]').getAttribute('value');
      console.log(token);
      var params = {
          headers:{
              "content-type":"application/json;charset=UTF-8",
              'X-CSRF-TOKEN' : token
          },
          method:"POST"
      }
      fetch("/value", params)
            .then((data) => {return data.json()})
            .then((data) => changeValue(data.value))
  }
  