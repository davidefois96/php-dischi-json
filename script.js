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



      },

      showForm: false


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

      this.toggleForm()  

    },
    removeDisk(index){

      const data = new FormData();
      data.append('indexToDelete',index);
      

      axios.post(this.apiUrl,data)
        .then(res => {
          
          this.albums = res.data; 

        })

    },
    toggleHeart(index) {
      this.albums[index].active = !this.albums[index].active;
    },
    toggleForm() {
      
      this.showForm = !this.showForm;
    }
  },
  mounted() {
    this.getApi(); 
  },
}).mount('#app');