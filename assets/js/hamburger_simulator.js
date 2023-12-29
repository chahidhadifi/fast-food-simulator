let price = document.getElementById("price-value");
let priceValue = 50;
price.textContent = priceValue;

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
    priceValue += 10;
    price.textContent = priceValue;
  }
});
remove_lettuce.addEventListener("click", (event) => {
  event.preventDefault();
  const lettuce_item = document.getElementsByClassName("lettuce");
  if (lettuce_item.length > 1) {
    lettuce_item[0].remove();
    input_number_lettuce--;
    number_lettuce.value = input_number_lettuce;
    priceValue -= 10;
    price.textContent = priceValue;
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
    priceValue += 10;
    price.textContent = priceValue;
  }
});
remove_tomato.addEventListener("click", (event) => {
  event.preventDefault();
  const tomato_item = document.getElementsByClassName("tomato");
  if (tomato_item.length > 1) {
    tomato_item[0].remove();
    input_number_tomato--;
    number_tomato.value = input_number_tomato;
    priceValue -= 10;
    price.textContent = priceValue;
  }
});

//Onion
const add_onion = document.querySelector(".add-onion");
const remove_onion = document.querySelector(".remove-onion");
const number_onion = document.getElementById("number-onion");
let input_number_onion = 1;
add_onion.addEventListener("click", (event) => {
  event.preventDefault();
  const onion_item = document.querySelector(".onion");
  if (input_number_onion < 3) {
    onion_item.insertAdjacentHTML("afterend", `<div class="onion"></div>`);
    input_number_onion++;
    number_onion.value = input_number_onion;
    priceValue += 10;
    price.textContent = priceValue;
  }
});
remove_onion.addEventListener("click", (event) => {
  event.preventDefault();
  const onion_item = document.getElementsByClassName("onion");
  if (onion_item.length > 1) {
    onion_item[0].remove();
    input_number_onion--;
    number_onion.value = input_number_onion;
    priceValue -= 10;
    price.textContent = priceValue;
  }
});

//Cheese
const add_cheese = document.querySelector(".add-cheese");
const remove_cheese = document.querySelector(".remove-cheese");
const number_cheese = document.getElementById("number-cheese");
let input_number_cheese = 1;
add_cheese.addEventListener("click", (event) => {
  event.preventDefault();
  const cheese_item = document.querySelector(".cheese");
  if (input_number_cheese < 3) {
    cheese_item.insertAdjacentHTML("afterend", `<div class="cheese"></div>`);
    input_number_cheese++;
    number_cheese.value = input_number_cheese;
    priceValue += 10;
    price.textContent = priceValue;
  }
});
remove_cheese.addEventListener("click", (event) => {
  event.preventDefault();
  const cheese_item = document.getElementsByClassName("cheese");
  if (cheese_item.length > 1) {
    cheese_item[0].remove();
    input_number_cheese--;
    number_cheese.value = input_number_cheese;
    priceValue -= 10;
    price.textContent = priceValue;
  }
});

//Beef
const add_beef = document.querySelector(".add-beef");
const remove_beef = document.querySelector(".remove-beef");
const number_beef = document.getElementById("number-beef");
let input_number_beef = 1;
add_beef.addEventListener("click", (event) => {
  event.preventDefault();
  const beef_item = document.querySelector(".beef");
  if (input_number_beef < 3) {
    beef_item.insertAdjacentHTML("afterend", `<div class="beef"></div>`);
    input_number_beef++;
    number_beef.value = input_number_beef;
    priceValue += 10;
    price.textContent = priceValue;
  }
});
remove_beef.addEventListener("click", (event) => {
  event.preventDefault();
  const beef_item = document.getElementsByClassName("beef");
  if (beef_item.length > 1) {
    beef_item[0].remove();
    input_number_beef--;
    number_beef.value = input_number_beef;
    priceValue -= 10;
    price.textContent = priceValue;
  }
});
