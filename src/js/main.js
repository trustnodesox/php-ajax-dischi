Vue.config.devtools = true;

var app = new Vue({
  el: '#root',
  data: {
    dischi: [],
  },
  mounted(){
    axios.get("http://localhost/php-ajax-dischi/call.php")
    .then((response) => {
      this.dischi = response.data;
      console.log(this.dischi);
    });
  }
})
