let display = document.getElementById("display");
let buttons = document.querySelectorAll(".element");
let expression = "";

buttons.forEach(button => {
    button.addEventListener("click", () => {
        let value = button.innerText;

        if (value === "AC") {
            expression = "";
            display.innerText = "0";
        } else if (value === "CLR") {
            expression = expression.slice(0, -1);
            display.innerText = expression || "0";
        } else if (value === "=") {
            try {
                expression = eval(expression).toString();
                display.innerText = expression;
            } catch {
                display.innerText = "Error";
                expression = "";
            }
        } else {
            expression += value;
            display.innerText = expression;
        }
    });
});
