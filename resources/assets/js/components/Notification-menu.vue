<template>
  <li class="nav-item dropdown">
    <a class="nav-link" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class="fa fa-bell"></i>
         <span class="badge badge-pill badge-danger position-relative">{{notifications.count}}</span>
    </a>
    <div class="dropdown-menu dropdown-menu-right p-3" aria-labelledby="notificationDropdown">
           <template v-for="item in notifications.items">
             <a class="dropdown-item" v-bind:href="item.url">
                <div>
                  <i class="fa fa-envelope fa-fw"></i> New message from <span class="text-success" >{{item.name}}</span>
                  <span class="mr-auto p-2 text-muted small">4 minutes ago</span>
                </div>
              </a>
              <div class="dropdown-divider"></div>
           </template>
           <div class="text-center link-block">
              <a :href="notifications.all">
                  <strong>See All Alerts</strong>
                  <i class="fa fa-angle-right"></i>
              </a>
          </div>
    </div>
  </li>
</template>
<script>
    export default {
        props:['current_url'],
        data(){
          return {
            notifications:{
              count: 4,
              all:this.current_url,
              items:[
                { id:1,
                  name:'John Aloyce',
                  message:'Hi there, This is Aloyce',
                  url:this.current_url+'/1'
                },
               { id:2,
                 name:'John Aloyce',
                 message:'Hi there, This is Aloyce',
                 url: this.current_url+'/2'
               },
                { id:3,
                  name:'John Aloyce',
                  message:'Hi there, This is Aloyce',
                  url:this.current_url+'/3'
                },
                {  id:4,
                   name:'John Aloyce',
                   message:'Hi there, This is Aloyce',
                   url:this.current_url+'/4'
                 },
              ],
            }
          }
        },
        mounted() {
            console.log(this.current_url);
            // Echo.private(`order.${orderId}`)
            //     .listen('NewOrderCreated', (e) => {
            //         console.log("Order created");
            //     });
        },
        methods:{

        }
    }
</script>
<style scoped>
  .badge.badge-pill.badge-danger.position-relative{
      bottom:10px;
      right:15px;
  }

</style>
