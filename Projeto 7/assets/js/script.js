let number1 = document.querySelector('#number1');
let number2 = document.querySelector('#number2');
let botao = document.querySelector('#botao');
let res = document.querySelector('#resultado');
let botaoFechar = document.querySelector('.fechar');


function calcular(n1, n2) {
    return n1 + n2;

}

function limpar() {
   /*  
    if(document.querySelector('#number1').value != '') {
        document.querySelector('#number1').value = '';
        document.querySelector('#number2').value = '';

    }*/
    with (document) {
        querySelector('#number1').value = '';
        querySelector('#number2').value = '';
        
        while(res.firstChild){
            res.removeChild(res.firstChild);
        }
    }
}


botao.addEventListener('click', function() {
    res.innerHTML = calcular( parseInt(number1.value), parseInt(number2.value)).toString();
});
