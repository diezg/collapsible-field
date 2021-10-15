Nova.booting((Vue, router, store) => {
  Vue.component('detail-has-many-collapsible', require('./components/DetailHasManyField'))

  Vue.component('detail-has-many-through-collapsible', require('./components/DetailHasManyThroughField'))

  Vue.component('detail-morph-to-many-collapsible', require('./components/DetailMorphToManyField'))
})
