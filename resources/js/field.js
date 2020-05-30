Nova.booting((Vue, router, store) => {
  Vue.component('index-nova-accordion-field', require('./components/IndexField'))
  Vue.component('detail-nova-accordion-field', require('./components/DetailField'))
  Vue.component('form-nova-accordion-field', require('./components/FormField'))
})
