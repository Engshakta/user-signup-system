document.getElementById("userForm").addEventListener("submit", function(event) {
    let firstName = document.getElementById("firstname").value.trim();
    let lastName = document.getElementById("lastname").value.trim();
    let email = document.getElementById("email").value.trim();

    // Email validation regex
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (firstName === "" || lastName === "" || email === "") {
        alert("All fields are required!");
        event.preventDefault();  // Prevent form submission
    } else if (!emailPattern.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();  // Prevent form submission
    }
});
window.onload = function() {
    // Check if the success message is shown
    const successMessage = document.getElementById('successMessage');
    
    if (successMessage) {
        // Wait for 3 seconds before hiding the message
        setTimeout(function() {
            successMessage.classList.add('hidden'); // Add the 'hidden' class to fade out
        }, 2000); // 2000 ms = 2 seconds
    }
};
