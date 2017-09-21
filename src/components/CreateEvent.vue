<template>
    <div class="createevent">
        <div id="createevent">
                <v-form v-model="valid" ref="form">
                    <v-text-field
                            label="Titre"
                            v-model="event.title"
                            :rules="titleRules"
                            :counter="10"
                            required
                    ></v-text-field>
                    <v-text-field
                            label="Description"
                            v-model="event.description"
                            required
                    ></v-text-field>
                    <v-btn @click="submit" :class="{ green: valid, red: !valid }">submit</v-btn>
                    <v-btn @click="clear">clear</v-btn>
                </v-form>
        </div>
    </div>
</template>

<script defer>
    export default {
        data () {
            return {
                event: {
                    title: "",
                    description: "",
                },
                valid: false,
            }
        },
        methods: {
            submit () {
                this.$http.post('http://apievents.herokuapp.com/events' , {
                    title: this.event.title,
                    description: this.event.description
                }).then(response => {
                    console.log(response.body);
                }, response => {
                    console.log('erreur', response)
                });
            },
            clear () {
                this.$refs.form.reset()
            }
        }

    }
</script>