import React from "react";
function Opciones (props){
    return(
        <option  value={require(`${props.link}`)}>{props.nombre}</option>
    );
}
export default Opciones