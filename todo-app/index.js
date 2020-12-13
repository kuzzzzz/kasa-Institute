const inputValue = document.getElementById("text");
const submit = document.getElementById("submit");
const form = document.getElementById("form");
const textBox = document.getElementById("text-box");


const todos = JSON.parse(localStorage.getItem("todos"));

if (todos) {
  todos.forEach((todo) => {
    addText(todo);
  });
}


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

  if (textinput) {
    text = `<span>${textinput.text}</span>`;
  }

  const textEl = document.createElement("li");
  textEl.innerHTML = `
  ${text} 
  <div class="tank">
    <input type="checkbox" class="check-it ">
    <input type="submit" value="remove" class="remove">
</div>
`;

  const checkbox = textEl.querySelector(".check-it");
  const remove = textEl.querySelector(".remove");

  if (textinput && textinput.completed) {
    checkbox.checked = true;
    textEl.classList.add("completed");
    updateLS();
  }

  checkbox.addEventListener("click", () => {
    textEl.classList.toggle("completed");
    updateLS();
  });

  remove.addEventListener("click", () => {
    textEl.remove();
    updateLS();
  });

  textBox.appendChild(textEl);

  inputValue.value = "";

  updateLS();
}

function updateLS() {
  const todosEL = document.querySelectorAll("li");
  const todos = [];

  todosEL.forEach((elm) => {
    todos.push({
      text: elm.innerText,
      completed: elm.classList.contains("completed"),
    });
  });

  localStorage.setItem("todos", JSON.stringify(todos));
}
