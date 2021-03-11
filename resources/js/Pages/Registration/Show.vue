<template>
<div>
    <h1>Header</h1>
    <p>{{ registration.name }}</p>
    <p>{{ registration.lastName }}</p>
</div>
</template>

<script>
export default {
    name: "Show",
    props: {
        registration : Object,
    },
}
</script>

<style scoped>

</style>
