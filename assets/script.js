function gotoProducts() {
    window.location.href = 'index.html#Products';
}

const select = document.getElementById("productType");
const image = document.getElementById("quote-img");

select.addEventListener('change', function (event) {
    if (event.target.value == "Hoodies") {
        image.src = "assets/img/t-shirt1.png";
    } else if (event.target.value == "TShirts") {
        image.src = "assets/img/t-shirt2.png";
    } else if (event.target.value == "RoundNeck") {
        image.src = "assets/img/t-shirt3.png";
    } else {
        // Do Something Azim
    }
});


// document.addEventListener("DOMContentLoaded", function () {
//     const form = document.getElementById('a-quote-form');
//     const successMsg = document.getElementById('index-form-sucess');
//     const failureMsg = document.getElementById('index-form-failed');

//     form.addEventListener('submit', function (event) {
//         event.preventDefault();

//         const formData = new FormData(form);

//         fetch('assets/PHP/quote.php', {
//             method: 'POST',
//             body: formData
//         })
//             .then(response => response.json())
//             .then(data => {
//                 if (data.success) {
//                     successMsg.style.display = 'block';
//                     failureMsg.style.display = 'none';
//                     form.reset(); // Optionally reset the form
//                 } else {
//                     successMsg.style.display = 'none';
//                     failureMsg.style.display = 'block';
//                 }
//             })
//             .catch(error => {
//                 console.error('Error:', error);
//                 successMsg.style.display = 'none';
//                 failureMsg.style.display = 'block';
//             });
//     });
// });