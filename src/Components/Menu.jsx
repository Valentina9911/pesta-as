import React from "react";

function Menu(props){
    return(
        <li class="opcion"><a href={require(`${props.link}`)} class="href">{props.nombre}</a></li>
    );
}
export default Menu;