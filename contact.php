<?php include('header.php'); ?>

  <!-- CONTACT FORM -->
  <section class="bg-white">
    <h2>Give us a Shout</h2>
    <h3 class="sub">Whether you're ready to start learning or have questions, we want to hear from you!</h3>
    <form action="processForm.php" name="contactForm" method="post" onsubmit="return validate(this)" class="wrapper">
      <div class="form">
        <p class="notice">all fields are required</p>
        <!-- REMOVE EMPTY CLASS WITH JS ON FILL -->
        <div id="enterUsername">
          <label for="username">Name: </label>
          <p class="required" id="requiredName">Please enter a valid name</p>
          <input type="text" name="username" id="username" placeholder="Enter your name" onblur="checkCorrect(this)" class="empty">
        </div>
        <div id="enterEmail">
          <label for="email">Email: </label>
          <p class="required" id="requiredEmail">Please enter a valid email</p>
          <input type="text" name="email" id="email" placeholder="you@email.com" onblur="checkEmail(this)" class="empty">
        </div>
        <div id="enterMessage">
          <label for="message">Message: </label>
          <p class="required" id="requireMessage">please enter a valid message</p>
          <textarea name="message" id="message" cols="30" rows="10" class="empty" placeholder="What's on your mind..." onblur="isEmpty(this)"></textarea>
        </div>
        <input type="submit" class="submit" name="contact-form">
      </div>
    </form>
  </section>
  <!-- CONTACT FORM -->

  <script src="js/jquery-2.1.4.js"></script>
  <!--
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  -->
  <script src="js/script.js"></script>

  <script>
    /////////////////////
    // FORM VALIDATION //
    /////////////////////

    var validate = function(form) {

      var username = checkCorrect(form.username);
      var email = checkEmail(form.email);
      var message = isEmpty(form.message);
      
      if (!username || !message || !email) {
        return false;
      } else {
        return true;
      }
    };

    var checkCorrect = function(val) {
      if (val.value === '' || val.value.length < 1 || !validateAlpha(val)) {
        setInvalid(val);
        return false;
      } else {
        removeInvalid(val);
        return true;
      }
    };

    var isEmpty = function(val) {
      var regex = /\S/;
      if (regex.test(val.value)) {
        return true
        alert('true');
      }
      alert('false');
      
      return false;
    }

    /*
     *  Using regex and test function to validate
     *  https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Regular_Expressions
     *  http://stackoverflow.com/questions/46155/validate-email-address-in-javascript
     */
    var checkEmail = function(email) {
      var regex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
      var valid = regex.test(email.value);
      if (valid === false) {
        setInvalid(email);
        return false;
      } else {
        removeInvalid(email);
        return true;
      }
    };

    var validateAlpha = function(name) {
      var regex = /^[a-z0-9]+$/i;
      var valid = regex.test(name.value);
      if (valid === false) {
        return false;
      } else {
        return true;
      }
    };

    var setInvalid = function(el) {
      // Add invalid class to classlist
      el.parentNode.querySelector(".required").classList.add("invalid");
      el.classList.add("empty");
    };

    var removeInvalid = function(el) {
      el.parentNode.querySelector(".required").classList.remove("invalid");
      el.classList.remove("empty");
    }
  </script>

  <?php include('contactFooter.php'); ?>