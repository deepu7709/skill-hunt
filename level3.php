<!DOCTYPE html>
<html>
<head>
    <title>Renaissance Period</title>
    <link rel="stylesheet" href="level33.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">
</head>
<body>
    <div class="popup">
        <div class="popup-content">
            <h1>x</h1>
            <h2>Renaissance Period</h2>
            <p>Well done so far..There has been a problem in a calculation, why don't you help out these people?<br>Close the window and start answering</p>
        </div>
    </div>
    <div class="popup success-popup">
        <div class="popup-content">
            <h2>Correct answer!You performed the skill:Problem Solving</h2>
            <p>Click "Next" to proceed to the next step.</p>
            <a href="level4.html" class="next">Next</a>
        </div>
    </div>
    <script>
        const popup = document.querySelector('.popup');
        const successPopup = document.querySelector('.success-popup');
        const X = document.querySelector('.popup-content h1');
        const nextBtn = document.getElementById('nextBtn');

        window.addEventListener('load', () => {
            popup.classList.add('showPopup');
            popup.childNodes[1].classList.add('showPopup');
        })

        X.addEventListener('click', () => {
            popup.classList.remove('showPopup');
            popup.childNodes[1].classList.remove('showPopup');
        })

        nextBtn.addEventListener('click', () => {
            successPopup.classList.remove('showPopup');
            successPopup.childNodes[1].classList.remove('showPopup');
        })
    </script>
    <section id="banner">
        <div class="main-text">
            <h2>An art gallery has a collection of Renaissance paintings.<br> If the value of the entire collection is $50,000, and the value of one painting is $500, how many paintings are there in the collection?</h2>
            <form id="answerForm">
                <label for="answerInput">Enter your answer</label><br><br>
                <input type="integer" id="answerInput" name="answerInput">
                <p id="verificationResult"></p>
        </div>
        <h3 class="heading" style="color:black;font-size:larger;">Attempts: <span id="turns">0</span> Score: <span id="score">0</span></h3>
        <input type="submit" id="submitBtn" value="Submit">
            </form>
    </section>
    <script>
         var attempts = 0;
         var score = 0;

        document.getElementById("submitBtn").addEventListener("click", function(event) {
            event.preventDefault(); // Prevent form submission

            // Get input value
            var answer = document.getElementById("answerInput").value;

            // Perform answer verification
            if (answer === "100") {
                document.getElementById("verificationResult").innerHTML = "Valid answer!";
                var attempts = parseInt(document.getElementById("turns").innerHTML) ;
                attempts++;
                document.getElementById("turns").innerHTML = attempts;
                
                if (attempts  > 0)
            {
                var score = parseInt(document.getElementById("score").innerHTML) + 10;
                document.getElementById("score").innerHTML = score;
            }
                successPopup.classList.add('showPopup');
                successPopup.childNodes[1].classList.add('showPopup');
                successMessage.style.fontFamily = "monospace";
        }
        else
        {
            document.getElementById("verificationResult").innerHTML = "Wrong answer. Try again.";
            document.getElementById("verificationResult").style.fontWeight ="bold";
            var attempts = parseInt(document.getElementById("turns").innerHTML) ;
            attempts++;
            document.getElementById("turns").innerHTML = attempts;
            if (attempts > 3)
            {
                var score = parseInt(document.getElementById("score").innerHTML) - 1;
                document.getElementById("score").innerHTML = score;
            }
        }
        
    });
 
    </script>
</body>
</html>
