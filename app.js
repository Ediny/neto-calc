const book = document.getElementById('book');
const submit = document.getElementById('submit');
const summa = document.getElementById('summa');
const slider = document.getElementById("bruto");
const output = document.getElementById("rangeText");



let bookValue = book.value;
let amount = 0;
let result = "Yes";
let procents = 1;


output.innerHTML = slider.value; 

  slider.oninput = function() {
  output.innerHTML = this.value;
}



book.addEventListener('change', (event) => {
     result = event.target.value;
  });


submit.addEventListener("click", (e) => {
    if (result === "Yes") {
        procents = 1;
      } else if (result === "No") {
        procents = 0.9;
      } 
      
    amount = bruto.value * procents * 0.78;
    amountRounded = amount.toFixed(2);
    summa.innerHTML = amountRounded + " €";
    e.preventDefault();

});


