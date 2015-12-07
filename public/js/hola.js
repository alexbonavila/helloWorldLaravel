function hello(){
    console.info("hElLo HtMl!");
}

function bye(){
    console.info("BYE");
}

$(function(){
    $('#sayhello').click( function(){
        //console.debug('prova');
        $('#helloworld').show();
    });
});

//bye();
//hello();
