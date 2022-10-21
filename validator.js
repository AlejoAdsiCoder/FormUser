function val(){

    let cedula = document.getElementById('cedula').value;
    let nombre = document.getElementById('nombre').value;
    let pass = document.getElementById('username').value;
    let email = document.getElementById('username').value;
    let type = document.getElementById('username').value;
    let comment = document.getElementById('username').value;

    if(!cedula){
        cedula.innerHTML = "Porfavor ingrese su nombre";
        console.log(cedula)
        return false;    // in failure case
    }       

    if(!nombre){
        nombre.innerHTML = "Porfavor ingrese su nombre";
        return false;    // in failure case
    }        

    return true;    // in success case
}