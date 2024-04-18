const { createApp } = Vue;

createApp({
  data() {
    return {
      apiUrl: 'server.php',
      albums: [],


      disk:{

      title:'',
      author:'',
      year:'',
      poster:'',
      genre:''



      }
      
      

    }
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl)
        .then(res => {
          this.albums = res.data; 
          

        })
        
    },
    newDisk(){

      const data = new FormData();
      data.append('newDiskTitle',this.disk.title);
      data.append('newDiskAuthor',this.disk.author);
      data.append('newDiskYear',this.disk.year);
      data.append('newDiskPoster',this.disk.poster);
      data.append('newDiskGenre',this.disk.genre);

      axios.post(this.apiUrl,data)
        .then(res => {
          
          this.albums = res.data; 

        })

    }
  },
  mounted() {
    this.getApi(); 
  },
}).mount('#app');