const inputValue = document.getElementById("text");
const submit = document.getElementById("submit");
const form = document.getElementById("form");

const textBox = document.getElementById("text-box");

form.addEventListener("submit", (e) => {
  e.preventDefault();
});

submit.addEventListener("click", () => {
  let text = inputValue.value;

  if (text) {
    addText();
  } else {
    alert("Please enter something");
  }
});

function addText(textinput) {
  let text = `<span>${inputValue.value}</span>`;
  const textEl = document.createElement("li");
  textEl.innerHTML = `
  ${text} 
  <div>
    <input type="checkbox" class="check-it ">
    <input type="submit" value="remove" class="remove">
</div>
`;
  const checkbox = textEl.querySelector(".check-it");
  const remove = textEl.querySelector(".remove");

  checkbox.addEventListener("click", () => {
    textEl.classList.toggle("completed");
  });
  remove.addEventListener("click", () => {
    textEl.remove();
  });

  textBox.appendChild(textEl);

  inputValue.value = "";
}
