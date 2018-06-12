require('./bootstrap');

window.Vue = require('vue');

Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('timeline-component', require('./components/TimelineComponent.vue'));

const app = new Vue({
    el: '#app'
});
