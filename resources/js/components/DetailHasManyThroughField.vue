<template>
  <div>
    <button
      type="button"
      v-on:click="hidden = !hidden"
      class="btn btn-default btn-primary mb-3"
    >
    {{ this.hidden ? this.field.show : this.field.hide }}
  </button>
    <div v-bind:class="hidden ? 'hidden' : ''">
      <resource-index
        :field="field"
        :resource-name="field.resourceName"
        :via-resource="resourceName"
        :via-resource-id="resourceId"
        :via-relationship="field.hasManyThroughRelationship"
        :relationship-type="'hasManyThrough'"
        @actionExecuted="actionExecuted"
        :load-cards="false"
        :initialPerPage="field.perPage || 5"
        :should-override-meta="false"
      />
    </div>
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'resourceId', 'resource', 'field'],
  data() {
    return {
      hidden: true,
    }
  },
  methods: {
    /**
     * Handle the actionExecuted event and pass it up the chain.
     */
    actionExecuted() {
      this.$emit('actionExecuted')
    },
  },
}
</script>