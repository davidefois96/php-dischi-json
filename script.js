const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      albums: []
      
    }
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl)
        .then(res => {
          this.albums = res.data; 
          console.log(this.albums);

        })
        
    }
  },
  mounted() {
    this.getApi(); 
  },
}).mount('#app');