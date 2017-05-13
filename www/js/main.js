/*JavaScript: первое задание*/

var table = document.querySelector('.table');

function onCellClick(event) {
  var target = event.target;
  var cellContent = target.innerHTML;
  alert (cellContent);
}
table.addEventListener('click', onCellClick);

/*JavaScript: второе задание*/

// Какие способы создать объект вы знаете? 
var MyObject = new Object();

MyObject2 = {
    id : 1,
    name : "Sample",
    boolval : true,
    getName : function()
    {
        return this.name;
    }
} 

//Как организовано наследование? 
// с помощью .prototype



/*JavaScript: третье задание*/

var string = 'abcdbcdecdefbcdeabcd';
var pattern = /b.+?e/;
var result = string.match(pattern);
var btnTop = document.querySelector('.btn-top');

function onBtnTopClick()  {
  alert (result);
}
btnTop.addEventListener('click', onBtnTopClick);





/*JavaScript: четвертое задание*/

function f() {
  var form = document.querySelector('.form');
  var elements = form.getElementsByTagName('input');
  var firstInput = elements[0];
  var secondInput = elements[1];
  secondInput.value = firstInput.value;
}
