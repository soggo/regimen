// Listen for the form submission event
document.getElementById("emailForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting normally
  
    var form = event.target;
    var formData = new FormData(form); // Get the form data
  
    // Send a POST request to the server-side script
    fetch(form.action, {
      method: form.method,
      body: formData
    })
    .then(function(response) {
      return response.text(); // Extract the response body as text
    })
    .then(function(data) {
      // Display the response message on the webpage
      document.getElementById("responseMessage").innerHTML = data;
      document.getElementById("responseMessage").style.display = "block";
      form.reset(); // Reset the form fields
    })
    .catch(function(error) {
      console.log("Error:", error);
    });
  });
  