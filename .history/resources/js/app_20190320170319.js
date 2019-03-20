require('./bootstrap');
window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify';

Vue.use(Vuetify);
Vue.component('app-header', require('./components/HeaderComponent.vue').default);
Vue.component('app-login', require('./components/LoginComponent.vue').default);

const app = new Vue({
    el: '#app'
});