import './App.css';
import Pag from './Components/contentPag.jsx';
import Menu from './Components/Menu';
import Opciones from './Components/opciones';

function App() {
 

  return (
  <body>
  <article id="#home"/>
  <header class="menu">
    <img class="logo" src="./images/logop.jpg"/>
  <nav class="menuu">
    <ul>
   <Menu nombre='inicio'
   link='index.html'/>,
   <Menu nombre='contacto'
   link='contacto.html'/>,
   <Menu nombre='sobre nosotros'
   link='nosotros.html'/>,
   <Menu nombre='galeria'
   link='galeria.html'/>,
    </ul>
  </nav>
</header>
<form action="#">
  <select name="Proceso" class="botones" id="lang">
  <Opciones nombre='Seleccionar'
  link='Seleccionar'/>,
  <Opciones nombre='Extensiones de pestañas'
  link='pestañas'/>,
  <Opciones nombre='Cejas'
  link='cejas'/>,
  <Opciones nombre='Lifting'
  link='lifting'/>,

  </select>
  </form>
  </body>

  );
}

function App( {
  return(
    <h1>App</h1>
  )
})

export default App