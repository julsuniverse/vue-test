<template>
    <div>
        <div v-for="post in posts">
            {{ post.title }}
        </div>
        <a href="" @click.prevent="loadMore()"
        v-if="lastPage > currentPage">Load More</a>
        <button class="btn" :class="lastPage > currentPage ? 'btn-success' : 'btn-danger'">button</button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                posts : [],
                currentPage: 0,
                lastPage: 1
            }
        },
        methods: {
            loadMore() {
                if(this.currentPage === this.lastPage) {
                    return;
                }
                axios({
                    method: 'GET',
                    url: '/get-posts?page=' + (this.currentPage + 1),
                })
                    .then(response => {
                        this.posts = this.posts.concat(response.data.data);
                        this.currentPage = response.data.current_page;
                        this.lastPage = response.data.last_page;
                    })
                    .catch(response => {
                        alert('Something went wrong');
                    })
            }
        },
        mounted() {
            this.loadMore();
        }
    }
</script>

<style scoped>

</style>