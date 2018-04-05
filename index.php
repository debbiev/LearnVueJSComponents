<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VueJS Components Example</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

</head>
<body>
<div id="app">
	<h1>{{ message }}</h1>
	<comp1></comp1>
</div>





<script>
	comp1 = Vue.component('comp1', {
		template: '<h2>My Component</h2>'
	})

	var app = new Vue({
		el: '#app',
		components: { comp1 },
		template: '<comp1/>',
		data: {
			message: 'Hello Vue!'
		},
	})



</script>
</body>
</html>
