

let acc = document.getElementsByClassName("accordion"); //accordion функция для переключения между скрытием и отображением содержимого некоторого контента страницы
for (let i = 0; i < acc.length; i++) {//В цикле for, мы перебираем весь массив элементов с классом accordion
  acc[i].addEventListener("click", function () {//На каждый из элементов мы добавляем действие по клику, будет выполняться функция.

    let panel = this.nextElementSibling; //Назначаем переменной с названием panel – свойство nextElementSibling, это переключатель между скрытием и показом активной панели.

    if (panel.style.maxHeight)
      panel.style.maxHeight = null;
    else
      panel.style.maxHeight = panel.scrollHeight + "px";//Для раскрытия, спрятанных блоков с текстом (эффект аккордеона), надо менять максимальную высоту, в зависимости от высоты панели на разных размерах экрана. Сначала делаем проверку, если значение максимальной высоты в стилях для блока с классом panel, равно нулю, то новая максимальная высота станет больше на энное количество пикселей, в зависимости от размера экрана у пользователя.

  });
}

let val = 0;//элемент val предназначет для будущего определения значения свойства opacity  
let opac = document.getElementById("opacAnimation");// переменная opac записывает в себя свойства и значения элемента opacAnimation 
let interval = 0; //переменная interval предназначена для записи функции setInterval которая определяет интервал анимации функции opacAnimation

const opacAnimation = () => {// функция opacAnimation предназначена для изменения значения свойства opacity
  val++;
  let opacIncrement = String(val) + "%";
  opac.style.opacity = opac.style.opacity = opacIncrement;
  if (val == 100) (
    clearInterval(interval)
  )
}
interval = setInterval(opacAnimation, 15);



