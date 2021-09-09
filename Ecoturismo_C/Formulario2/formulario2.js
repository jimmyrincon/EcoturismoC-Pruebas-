//(funcion)(){
    var formulario2 = document.getElementById('formulario2'),
		documento=formulario2.documento,
        nombres = formulario2.nombres,
        telefono = formulario2.telefono,
		correo = formulario2.correo,
        ciudad = formulario2.ciudad,
		sexo = formulario2.sexo,
		terminos = formulario2.terminos,
		error = document.getElementById('error');

function validardocumento(e){
   if(documento.value == '' || documento == null){
        console.log('Ingresar numero de documento');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresar Numero de documento</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
        function validarNombres(e){
    if(nombres.value == '' || nombres == null){
        console.log('Completa el nombre');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Nombre Por Favor</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
    function validartelefono(e){
    if(telefono.value == '' || telefono == null){
        console.log('Completa el numero telefonico');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Numero Telefonico Por Favor</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarciudad(e){
if(ciudad.value == '' || ciudad == null){
    console.log('Completa Ciudad De Residencia');
    error.style.display = 'block';
    error.innerHTML = error.innerHTML + '<li>Ingresa Ciudad De Residencia</li>';
    e.preventDefault();
}else{
error.style.display='none';
}
}
    function validarCorreo(e){
    if(correo.value == '' || correo == null){
        console.log('Completa el correo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Ingresa Un Email Por Favor</li>';
        e.preventDefault();
}else{
    error.style.display='none';
}
}
function validarSexo(e){
    if(sexo.value == '' || sexo.value == null){
        console.log('Selecciona Un Sexo');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Selecciona Un Sexo Por Favor</li>';
        e.preventDefault();
    }else{
    error.style.display='none';
}
}
function validarTerminos(e){
    if(terminos.checked == false){
        console.log('Acepta Los Terminos');
        error.style.display = 'block';
        error.innerHTML = error.innerHTML + '<li>Acepta Los Terminos Por Favor</li>';
        e.preventDefault();
    }else if(documento.value == '' || documento == null || nombres.value == '' || nombres == null || telefono.value == '' || telefono == null || ciudad.value == '' || ciudad == null || correo.value == '' || correo == null || sexo.value == '' || sexo.value == null){
    error.style.display='block';
}
}

function validarForm(e){
   error.innerHTML = '';
   error.style.display = 'block';
   validardocumento(e);
   validarNombres(e);
   validarCorreo(e);
   validartelefono(e);
   validarciudad(e);
   validarSexo(e);
   validarTerminos(e);
}


formulario2.addEventListener('submit', validarForm);

//}())