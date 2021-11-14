#How to use this calculator:

1. Set your bruto income,
2. Set if you have or don't have tax boox,
3. Press "Aprēķināt"


#Bonuss:

You can find out more about finance by pressing the button labeled "Viss  biznesam" that will redirect you to Swedbank business page.

#How the calculator works:

1. Bruto input works as input scroller and displays value by using oninput method aand function that change the value and saving it for later,
2. Tax book works by using Change event listener that checks which option was selected and saving that choice in a variable,
3. Submit button works by using Click event listener that takes bruto value, selected book variable(depending on the choice it sets it 10% or none) and 22%, then multiplying those values, rounding it up so only 2 numbers are after comma and showing the value using innerHTML where id is "summa".