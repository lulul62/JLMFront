import Vue from 'vue'
import Router from 'vue-router'
import Map from '@/components/Map'
import Event from '@/components/Event'

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/',
            name: 'Map',
            component: Map
        },
        {
            path: '/createEvent',
            name: 'Event',
            component: Event
        }
    ]
})
