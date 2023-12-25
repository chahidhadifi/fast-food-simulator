//lettuce
const add_lettuce = document.querySelector(".add-lettuce");
const remove_lettuce = document.querySelector(".remove-lettuce");
const number_lettuce = document.getElementById("number-lettuce");
let input_number_lettuce = 1;
add_lettuce.addEventListener("click", (event) => {
  event.preventDefault();
  const lettuce_item = document.querySelector(".lettuce");
  if (input_number_lettuce < 3) {
    lettuce_item.insertAdjacentHTML("afterend", `<div class="lettuce"></div>`);
    input_number_lettuce++;
    number_lettuce.value = input_number_lettuce;
  }
});
remove_lettuce.addEventListener("click", (event) => {
  event.preventDefault();
  const lettuce_item = document.getElementsByClassName("lettuce");
  if (lettuce_item.length > 1) {
    lettuce_item[0].remove();
    input_number_lettuce--;
    number_lettuce.value = input_number_lettuce;
  }
});

//Tomato
const add_tomato = document.querySelector(".add-tomato");
const remove_tomato = document.querySelector(".remove-tomato");
const number_tomato = document.getElementById("number-tomato");
let input_number_tomato = 1;
add_tomato.addEventListener("click", (event) => {
  event.preventDefault();
  const tomato_item = document.querySelector(".tomato");
  if (input_number_tomato < 3) {
    tomato_item.insertAdjacentHTML("afterend", `<div class="tomato"></div>`);
    input_number_tomato++;
    number_tomato.value = input_number_tomato;
  }
});
remove_tomato.addEventListener("click", (event) => {
  event.preventDefault();
  const tomato_item = document.getElementsByClassName("tomato");
  if (tomato_item.length > 1) {
    tomato_item[0].remove();
    input_number_tomato--;
    number_tomato.value = input_number_tomato;
  }
});
