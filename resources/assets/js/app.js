
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('select2');

//window.Vue = require('vue');
import Vue from 'vue';

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import exampleComponent from './components/ExampleComponent.vue'
import postsComponent from './components/PostsComponent.vue'

Vue.component('example-component', exampleComponent);
Vue.component('posts-component', postsComponent);

const app = new Vue({
    el: '#app'
});
