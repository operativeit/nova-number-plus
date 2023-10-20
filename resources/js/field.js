import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-number-plus', IndexField)
  app.component('detail-nova-number-plus', DetailField)
  app.component('form-nova-number-plus', FormField)
})
