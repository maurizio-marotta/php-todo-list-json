const {createApp} = Vue;

createApp({
  data(){
    return{
      ApiUrl: 'server.php',
      lists:[],
      AddToDo: ''
    }
  },

  methods:{
    getApi(){
      axios.get(this.ApiUrl)
      .then(result => {
        console.log(result.data);
        this.lists = result.data;
      })
    },


  },

  mounted(){
    this.getApi();
  },
}).mount('#app');