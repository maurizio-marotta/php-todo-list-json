const {createApp} = Vue;

createApp({
data(){
  return{
    lists: './lista.json',
    AddToDo: '',
    
  }
},

methods:{
  deleteRow(i){
    this.lists.splice(i,1);
  },
  NewToDo(){
    const ToDo = {
      text: this.AddToDo,
      done: false
    }
    console.log(this.AddToDo)
    this.lists.unshift(ToDo)
    this.AddToDo="";
  }
  
}
}).mount('#app')