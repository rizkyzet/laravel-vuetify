<template lang="">
    <v-row class="justify-content-center">
        <v-col cols="6">
            <v-scale-transition>
                <v-alert
                    transition="scale-transition"
                    dense
                    text
                    type="success"
                    v-if="result.email.length > 0 || result.password.length > 0"
                    dismissible
                >
                    Email : <strong>{{ result.email }}</strong> Password :
                    <strong>{{ result.password }}</strong
                    >.
                </v-alert>
            </v-scale-transition>
            <v-text-field
                label="Email Address"
                type="email"
                v-model="email"
                :disabled="loadingBar"
            ></v-text-field>
            <v-text-field
                label="Password"
                type="password"
                v-model="password"
                :disabled="loadingBar"
            ></v-text-field>
            <v-btn
                :loading="loadingBar"
                color="blue"
                class="white--text float-right"
                @click="login"
                >Click</v-btn
            >
        </v-col>
    </v-row>
</template>
<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            result: {
                email: "",
                password: "",
            },
            loadingBar: false,
        };
    },
    methods: {
        resetResult() {
            this.result.email=''
            this.result.password=''
        },
        async login() {
            this.resetResult();
            const process = new Promise((resolve, reject) => {
                setTimeout(() => {
                    this.result.email = this.email;
                    this.result.password = this.password;
                    resolve(this.result);
                }, 2000);
            });

            this.loadingBar = true;
            const result = await process;
            this.loadingBar = false;

            console.log(result);
        },
    },
};
</script>
<style lang="scss"></style>
