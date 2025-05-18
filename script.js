var v = 48, f = 16, t = "MY WATER TANKER", color;

function a() {
  if (f == 16) {
    v += 16;
    color = "red";
  } else {
    v -= 16;
    color = "blue";
  }

  document.getElementById("h").innerHTML =
    "<h1 style='font-size: " + v + "px; margin: 0px; color: " + color + "'><b>" + t + "</b></h1>";

  if (v >= 50) {
    f = 0;
  } else if (v <= 46) {
    f = 16;
  }

  c();
}

function c() {
  setTimeout(a, 1000); // Adjust for desired animation speed
}

c();


function validateForm() {
            var pincode = document.getElementById('pincode').value;
            var email = document.getElementById('email').value;
            var phone = document.getElementById('phone').value;

            // Regular Expressions
            var pincodePattern = /^(?:[1-9]\d{5})$/;
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            var phonePattern = /^\+91[6-9]\d{9}$/;

            if (!(pincodePattern.test(pincode))) { // Corrected line
                alert("Invalid Pin Code. Format should be like 500011.");
                return false;
            }

            if (!(emailPattern.test(email))) {
                alert("Invalid Email. Use format: example@mail.com");
                return false;
            }

            if (!(phonePattern.test(phone))) {
                alert("Invalid Phone Number. Format should be +91 followed by 10 digits.");
                return false;
            }

            alert("Form submitted successfully!");
            return true;
        }
validateForm();
