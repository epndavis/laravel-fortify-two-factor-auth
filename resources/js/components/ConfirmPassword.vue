<template>
    <div>
        <div v-if="confirmingPassword">
            <form @submit.prevent="confirmPassword">
                <input v-model="password" type="password" />

                <button>
                    Confirm
                </button>
            </form>
        </div>

        <span v-else @click="startConfirmingPassword">
            <slot />
        </span>
    </div>
</template>

<script>
export default {
    data () {
        return {
            confirmingPassword: false,
            password: ''
        }
    },

    methods: {
        startConfirmingPassword () {
            axios.get('/user/confirmed-password-status')
                .then((response) => {
                    if (response.data.confirmed) {
                        this.$emit('confirmed')
                    } else {
                        this.confirmingPassword = true
                    }
                })
        },

        confirmPassword () {
            axios.post('/user/confirm-password', {
                password: this.password,
            }).then(response => {
                this.confirmingPassword = false
                this.$emit('confirmed')
            })
        },
    }
}
</script>
