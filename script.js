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
    /*addTask(){
      const data = new FormData(); 
      data.append('todoItem', this.AddToDo);
      
      axios.post(this.ApiUrl, data)
      .then(result =>{
        this.AddToDo = '';
        this.lists= result.data;
        console.log('this.list');
      })
    },*/
    addTask(){
      const data ={
        todoItem: this.AddToDo
      }
      axios.post(this.ApiUrl,data,{
        headers:{'content-Type': 'multipart/form-data'}
      }).then(result =>{
        this.AddToDo = '';
        this.lists = result.data;
        console.log(this.lists)
      })
    }


  },

  mounted(){
    this.getApi();
  },
}).mount('#app');