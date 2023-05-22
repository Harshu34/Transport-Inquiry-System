function press() {
    var message = document.getElementById('message').value;
    fetch('http://localhost:5000/speak', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({text: message, language: 'hi-IN'})
    })
    .then(response => {
        console.log(response.json());
    })
    .catch(error => {
        console.error(error);
    });
}
