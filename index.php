<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>TO DO LIST</title>
</head>

<body>

<div id="app" >
  <header>
    <div class="container-title">
      <div class="title">TO DO LIST</div>
    </div>
  </header>
  <div class="input">
    <input @keyup.enter="addTask" v-model.trim="AddToDo" class="input-text" type="text" placeholder= "cose da fare">
    <button @click="addTask"><i class="fa-solid fa-plus"></i></button>
  </div>
    <main>
      <div class="container-list">
        <ul >
          <div class="title-list">
            <h3>Cose da fare</h3>
            <h3>Fatte</h3>
          </div>
          <li v-for="(list,i) in lists">
            <span v-if="list.done === true" class="decoration" >{{list.text}}</span>
            <span v-else="list.done === false" > {{list.text}}</span> 
            <span > <input v-model="list.done" type="checkbox" name="checkbox" id="checkbox">
            <i @click="deleteRow(i)" class="fa-solid fa-trash-can"></i>
            </span> 
          </li>
        </ul>
      </div>
    </main>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js' integrity='sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==' crossorigin='anonymous'></script>
  <script src="script.js"></script>


</body>
</html>