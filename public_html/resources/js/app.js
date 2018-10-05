fetch('/public_html/resources/json/songs.json')
  .then(function(response) {
    return response.json();
  })
  // .then(function(myJson) {
  //   console.log(JSON.stringify(myJson));
  .then(response => {
    // for(var key of response) {
    //     console.log(response);
    // }
    console.log(response);
  });