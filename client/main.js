const todo = document.querySelector(".nuevo-todo");
const lista = document.querySelector(".lista-todo");
const btnSubmit = document.querySelector(".submit");

btnSubmit.addEventListener("click",(e)=>{
    e.preventDefault();
    lista.innerHTML += `<li class="todo"> ${todo.value}</li>`
})




