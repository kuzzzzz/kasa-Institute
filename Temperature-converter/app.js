let fahrenhit = document.getElementById("fah");
let celsius = document.getElementById("ceh");
let temp = document.getElementById("temp");
let inBox = document.getElementById("input-box");
let sub = document.getElementById("sub");

sub.addEventListener("click", () => {
  let inputValue = Number(inBox.value);
  temp.innerText = inputValue + " F";
  const cels = (inputValue - 32) * (5 / 9);

  celsius.addEventListener("click", () => {
    temp.innerText = `${cels.toFixed(2)} C`;
  });
  fahrenhit.addEventListener("click", () => {
    temp.innerText = `${inputValue} F`;
  });
});
