require('./bootstrap');
window.Vue = require('vue');
Vue.component('search-component', require('./components/SearchComponent.vue').default);
const app = new Vue({
    el: '#app',
});