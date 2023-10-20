<template>
  <input
    ref="inputRef"
    type="text"
    class="w-full form-control form-input form-input-bordered"
    v-bind="$attrs"
  />
</template>

<script>
import { watch } from 'vue'
import { useCurrencyInput } from 'vue-currency-input'

export default {
  name: 'CurrencyInput',
  props: {
    modelValue: Number,
    options: Object
  },
  setup(props) {
    const { inputRef, setValue, setOptions } = useCurrencyInput(props.options)

    watch(
      () => props.modelValue,
      (value) => {
        setValue(value)
      }
    )

    watch(
      () => props.options,
      (options) => {
        setOptions(options)
      }
    )

    return { inputRef }
  }
}
</script>
