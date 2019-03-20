/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)
Vue.component('app-header', require('./components/HeaderComponent.vue'));

Vue.component('app-login', require('./components/LoginComponent.vue'));

const app = new Vue({
    el: '#app'
});