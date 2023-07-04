<style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");
@-webkit-keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
@keyframes come-in {
  0% {
    -webkit-transform: translatey(100px);
            transform: translatey(100px);
    opacity: 0;
  }
  30% {
    -webkit-transform: translateX(-50px) scale(0.4);
            transform: translateX(-50px) scale(0.4);
  }
  70% {
    -webkit-transform: translateX(0px) scale(1.2);
            transform: translateX(0px) scale(1.2);
  }
  100% {
    -webkit-transform: translatey(0px) scale(1);
            transform: translatey(0px) scale(1);
    opacity: 1;
  }
}
* {
  margin: 0;
  padding: 0;
}

html, body {
  background: #eaedf2;
  font-family: 'Roboto', sans-serif;
}

.floating-container {
  position: fixed;
  width: 100px;
  height: 100px;
  bottom: 0;
  right: 0;
  margin: 35px 25px;
  z-index: 120;
}
.floating-container:hover {
  height: 300px;
}
.floating-container:hover .floating-button {
  box-shadow: 0 10px 25px rgba(43, 43, 43, 0.6);
  -webkit-transform: translatey(5px);
          transform: translatey(5px);
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container:hover .element-container .float-element:nth-child(1) {
  -webkit-animation: come-in 0.4s forwards 0.2s;
          animation: come-in 0.4s forwards 0.2s;
}
.floating-container:hover .element-container .float-element:nth-child(2) {
  -webkit-animation: come-in 0.4s forwards 0.4s;
          animation: come-in 0.4s forwards 0.4s;
}

.element-container {
    margin-top: 100px;
}
.floating-container .floating-button {
  position: absolute;
  display: flex;
  justify-content: center;
    align-items: center;    
  width: 55px;
  height: 55px;
  background: #ff8215;
  bottom: 0;
  border-radius: 50%;
  left: 0;
  right: 0;
  margin: auto;
  color: white;
  line-height: 50px;
  text-align: center;
  font-size: 23px;
  z-index: 100;
  box-shadow: 0 10px 25px -5px rgba(34, 34, 34, 0.6);
  cursor: pointer;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.floating-container .float-element {
  position: relative;
  display: flex;
  justify-content: center;
    align-items: center;
  border-radius: 50%;
  width: 55px;
  height: 55px;
  margin: 20px auto;
  color: white;
  font-size: 22px;
  text-align: center;
  line-height: 0px;
  z-index: 0;
  opacity: 0;
  -webkit-transform: translateY(100px);
          transform: translateY(100px);
}

.floating-container .float-element:nth-child(1) {
  background: #ff8215;
  box-shadow: 0 20px 20px -10px rgba(54, 54, 54, 0.5);
}
.floating-container .float-element:nth-child(2) {
  background: #E1306C;
  box-shadow: 0 20px 20px -10px rgba(56, 56, 56, 0.5);
}
</style>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<div class="floating-container">
  <div class="floating-button"><i class="material-design bi bi-telephone"></i></div>
  <div class="element-container">

    <a href="https://wa.link/gb5t7m" target="_blank">
      <span class="float-element">
        <i class="material-design bi bi-whatsapp"></i>
      </span>
    </a>

  </span>
  <a href="https://www.instagram.com/tyolatrans.mjl/" target="_blank">
      <span class="float-element instagram">
        <i class="material-design bi bi-instagram"></i>
      </a>
    </span>
  </div>
</div>