<html>
<div class="front">
    CONFIGURATOR
</div>
<div class="front2">
  CHOOSE YOUR CONFIG
</div>
<br>
<br>
<div class="led">
  <div class="led1">
  a
</div>
<div class="led2">
  a
</div>
<div class="led3">
  a
</div>
<div class="led4">
  a
</div>
<div class="led5">
  a
</div>
<div class="led6">
  a
</div>
<div class="led7">
  a
</div>
<div class="led8">
  a
</div>
  a
</div>
<div class="color">
    <canvas id = "color">
    </canvas>
  <p>
  <input type = "button" class="btn" value = "Change Color" onclick = "changecolor()">
  <input type = "color" value = "#000000" id = "clr" onchange = "docolor()">
    <input type = "range" min = "10" max = "100" value = "10" id = "soft" oninput = "dosquare()">
    </p>
<link rel="StyleSheet" href="configurator.css" type="text/css"/>
<script type="text/javascript" src="configurator.js"></script>
</div>



<div class="row">
  <label for="display">display: </label>
  <select id="display">
    <option value="flex">led</option>
    <option value="grid">grid</option>
  </select>
</div>
<div class="re">
<div class="row">
  <label for="values">color </label>
  <select id="values">
    <option value="blue">blue</option>
    <option value="green">green</option>
    <option value="red">red</option>
  </select>
</div>
</html>
