<template>
  <div class="map">
    <div id="map"></div>
  </div>
</template>

<script defer>
export default {
  name: 'map',
  data() {
    return {
      events: [],
      conf: {}
    }
  },
  methods: {
    /**
     * Init de la map sur le composant.
     */
    showMap() {
      var map = L.map('map').setView([51.505, -0.09], 13);
      L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
    },

    /**
     * Récupere les URLS nécessaires au controleur.
     */
    getConfig() {
      return this.$http.get("static/conf.json").then(conf=>{
         this.conf = conf.body;
         return this.getAllEvents(this.conf.eventsBaseUrl);
      });
    },

    /**
     * Récupere la liste de tout les évenements en cours
     */
    getAllEvents(url) {
      return this.$http.get(url).then(events => {
         this.events = events.body;
      });
    }
  },

  mounted() { this.showMap(), this.getConfig()}
}
</script>
<style scoped>
body {
  padding: 0;
  margin: 0;
}

html,
body,
#map {
  height: 100vh;
  z-index: 1;
  width: 100vw;
}
</style>
