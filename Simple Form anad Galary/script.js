const loginButton = document.getElementById("loginButton");

loginButton.addEventListener("click", (event) => {
  event.preventDefault(); // prevent the default form submission

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // validate the username and password
  if (username === "admin" && password === "password") {
    alert("Login successful!");
  } else {
    alert("Invalid username or password!");
  }
});
