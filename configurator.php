<div class="front">
    CONFIGURATOR
</div>
<div class="color">
    <canvas id = "color">
    </canvas>
  <p>
  <input type = "button" class="btn" value = "Change Color" onclick = "changecolor()">
  <input type = "color" value = "#000000" id = "clr" onchange = "docolor()">
    <input type = "range" min = "10" max = "100" value = "10" id = "soft" oninput = "dosquare()">
    </p>
    <style type="text/css">
    #color {
    width: 200pt;
    height: 50pt;
    border: 2px solid #fff;
  }
  .btn{padding: 10px; color: #fff;background:#000;cursor: pointer;}
  .yellowback {
    background-color: yellow;
  }
    </style>
<script type="text/javascript" src="configurator.js"></script>
</div>
</html>
