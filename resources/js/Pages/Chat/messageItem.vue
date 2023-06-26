<template>
    <div>
        {{ messages.user.name }}: {{ messages.message }}
    </div>
</template>

<script>
    export default{
        props: ['messages']
    }

</script>