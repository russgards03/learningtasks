/*eslint-env browser*/
let btn1 =document.querySelector('#btn-1');
let btn2 =document.querySelector('#btn-2');
let btn3 =document.querySelector('#btn-3');

btn1.addEventListener('click', () =>{
    document.body.style.backgroundImage ="url('s1.jpg')";
});
btn2.addEventListener('click', () =>{
    document.body.style.backgroundImage ="url('s3.jpg')";
});
btn3.addEventListener('click', () =>{
    document.body.style.backgroundImage ="url('s4.jpg')";
});