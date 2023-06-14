//import Vue from 'vue';
import axios from 'axios'
window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found');
}
//import VueSweetAlert from 'vue-sweetalert';
//import Vue from 'vue';


import { createApp } from 'vue';

const app = createApp({});

window.Vue = require('vue');

/*var my_axios = axios.create({
  baseURL: window.location.origin,
});*/

//Vue.prototype.$http = my_axios;
app.component('component-one', require('./components/example-component1.vue'));

console.log('123');


/*const app = new Vue({
    el: '#app',
})*/