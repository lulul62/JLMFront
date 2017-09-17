import Vue from 'vue'
import Router from 'vue-router'
import Map from '@/components/Map'
import Event from '@/components/Event'

Vue.use(Router);

export default new Router({
    routes: [
        {
            path: '/map',
            name: '',
            component: Map
        },
        {
            path: '/event',
            name: 'Event',
            component: Event
        }
    ]
})
