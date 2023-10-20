<template>
  <DefaultField
    :field="field"
    :errors="errors"
    :show-help-text="showHelpText"
    :full-width-content="fullWidthContent"
  >
    <template #field>
      <CurrencyInput
        v-model="value"
        :class="errorClasses"
        :placeholder="field.name"
        :readonly="field.readonly"
        :disabled="field.disabled"
        :options="field.options"
      />
    </template>
  </DefaultField>
</template>
<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'
import CurrencyInput from './CurrencyInput'

export default {
  components: { CurrencyInput },
  mixins: [FormField, HandlesValidationErrors],
  props: ['resourceName', 'resourceId', 'field'],
  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.fieldAttribute, this.value || '')
    },
  }
}
</script>
