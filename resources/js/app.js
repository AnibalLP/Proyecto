require('./bootstrap');
window.Vue = require('vue').default;
import vueRouter from 'vue-router'


import bienvenida from './App.vue'
vue.use(vueRouter)
const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/',
        component: welcome,
    }]

})
Vue.component()
const app = new Vue({
    el: '#app',
    components: { App }
});