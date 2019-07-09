new Vue({
	el: '#app',
	data: {
		length: 0,
		button_name: "sumbit",
		passwords:[],
	},
	// watch: {
	// 	passwords(){
	// 		this.passwords = this.passwords;
	// 	}
	// },

	methods: {
		generatepassword: function(){
			this.passwords = [];
			for(var i =0; i<this.length; i++){
				this.passwords.push( Math.random().toString(36).slice(-8) );
			}
			
		}
	}
});