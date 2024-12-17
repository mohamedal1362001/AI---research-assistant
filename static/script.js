// Add any JavaScript code here if needed
function uploadFile() {
    var input = document.getElementById('pdfFile');
    var file = input.files[0];

    if (file) {
        var formData = new FormData();
        formData.append('pdfFile', file);

        fetch('upload.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.text())
            .then(result => {
                console.log(result); // Response from the server after processing the file
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
}

var menu = document.getElementById("bar");
var items = document.getElementById("navbar");
items.style.right = "-360px";
menu.onclick = function () {
    if (items.style.right == "-360px") {
        items.style.right = "0";
    } else {
        items.style.right = "-360px";
    }
}