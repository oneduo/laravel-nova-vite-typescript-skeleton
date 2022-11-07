<script setup lang="ts">
import Vite from "../svg/Vite.vue"

</script>

<template>
  <div class="tool-template">
    <Head title="Tool Template" />

    <Heading class="mb-6">Tool Template</Heading>

    <Card
      class="flex flex-col items-center justify-center"
      style="min-height: 300px"
    >
      <Vite class="mb-8"/>

      <h1 class="dark:text-white text-4xl font-light mb-6">
        Nova x Typescript x Vite
      </h1>

      <p class="dark:text-white text-lg opacity-70">
        You can edit this tool's component at:
        <code
          class="ml-1 border border-gray-100 dark:border-gray-900 text-sm font-mono text-white bg-black rounded px-2 py-1"
        >
          /nova-components/ToolTemplate/resources/js/pages/Tool.vue
        </code>
      </p>
    </Card>
  </div>
</template>


<style>
/* Scoped Styles */
</style>
