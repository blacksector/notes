
  <script src="<?php echo JS_PATH; ?>js/marked.js"></script>
  <script>
  	document.getElementById('markdownContent').innerHTML =
  		marked(`<?php echo $content; ?>`);
  </script>
</html>
