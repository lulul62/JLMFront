<template>
    <div class="event">
        <div id="event">
            <table>
                <thead>
                <tr>
                    <th>Nom de l'événement</th>
                    <th>Description de l'évenement</th>
                    <th>Création de l'évenement</th>
                </tr>
                </thead>
                <tbody>
            <tr>
                <td>{{ events[0].title }}</td>
                <td>{{ events[0].description }}</td>
                <td>{{ events[0].createdAt }}</td>
            </tr>
            </tbody>
            </table>
        </div>
    </div>
</template>

<script defer>
export default {
    data() {
        return {
            events: []
        }
    },
    mounted () {
        this.$http.get('http://apievents.herokuapp.com/events').then(response => {
            this.events = response.data;
            console.log(response.data);
        }, response => {
            console.log('erreur', response)
        });
    }
}
</script>
