<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" v-model="q"/>
                        <!-- <a href="/" @click.prevent="clickButton()">Click</a>
                        <p>Search query: {{ res }}</p> -->

                        <ul>
                            <li
                                v-for="user in filteredUsers"
                                v-if="user.status == 1"
                            >
                                {{ user.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'users'
        ],
        data() { //все глобальные реактивные переменные
            return {
                q: '',
                res : '',
            }
        },
        methods: {
            clickButton() {
                this.res = this.q;
            },
            /*clickButton: function () {

            }*/
        },
        computed: {
            filteredUsers() {
                return this.users.filter(user => {
                    return user.name.toLowerCase().indexOf(this.q.toLowerCase()) !== -1;
                });
            }
        }
    }
</script>

<style>

</style>
