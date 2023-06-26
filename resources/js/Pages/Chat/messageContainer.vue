<template>

    <div class="h-96 w-full">
        <div class="h-full p-2 flex-col--reverse overflow-scroll">
            <div v-for="(messages, index) in messages" :key="index">
                <message-item :messages="messages"/>
            </div>
        </div>
    </div>
</template>

<script>
    import MessageItem from './messageItem.vue';

    export default{
    props: ["messages"],
    components: { MessageItem }
}

</script>