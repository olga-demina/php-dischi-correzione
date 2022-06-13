const app = new Vue({
  el: "#root",
  data: {
    discs: [],
    genre: ""
  },
  created() {
    this.getDiscs();
  },
  methods: {
    getDiscs() {
      axios
      .get("http://localhost:8888/php-dischi-correzione/server.php", {
        params: {
          genre: this.genre
        }
      })
      .then((resp) => {
        this.discs = resp.data;
      });
    }
  }
});
