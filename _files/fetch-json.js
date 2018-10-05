/**
 * Fetch json fil
 */
fetch("/data/songs.json").then(response => {
    return response.json();
}).then(data => {
    for(var key of data) {
        console.log(data);
    }
});