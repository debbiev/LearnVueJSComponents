<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VueJS Components: Grid</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <link href='style.css' rel='stylesheet' type='text/css'>
</head>
<body>
<h1>VueJS Components</h1>
<p>Example taken from <a href="https://vuejs.org/v2/examples/index.html" target="_blank">VueJS V2 Official Documentation Examples</a></p>

<!-- component template -->
<script type="text/x-template" id="grid-template">
<?php include "grid.vue" ?>
</script>

<!-- demo root element -->
<div id="demo">
  <form id="search">
    Search <input name="query" v-model="searchQuery">
  </form>
  <demo-grid
    :data="gridData"
    :columns="gridColumns"
    :filter-key="searchQuery">
  </demo-grid>
</div>




<script src="main.js"></script>
</body>
</html>
