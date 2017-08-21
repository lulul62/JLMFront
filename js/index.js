Vue.use(Vuetify);

var vm = new Vue({
  el: '#create-party',
  data() {
    return {
       items: [],
       baseUrlCreate : "https://12c73f9d.ngrok.io/",
    }
  },
  methods: {
    createNewParty : function () {
      return vm.$http.post(vm.baseUrlCreate).then(function(resp){
          return vm.items = resp.body.data;
          console.log(resp.body.data);
      }, function(err){
          console.log(err);
      });
    },
  }
})

vm.createNewParty();
