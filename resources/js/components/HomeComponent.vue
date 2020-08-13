<template>

 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" style="padding-right:0px; padding-left:0px">
 <div class="card" style="border:none !important">
 <div class="card-header" style="border-radius:15px 0 0 0">Users</div>
 
 <div class="card-body" style="min-height: 455px;
 display: block;
 overflow-y: auto; padding: 0 0px !important; max-height: 455;">
 <div > 
 <b-tabs content-class="mt-3" justified>
 <b-tab title="Open" >
 <div class=" page-container">
 <div class="padding">
 
 <div class="list list-row block">

 <div role="tablist">

 <b-button block v-b-toggle.accordion-1 variant="info" class="btn-collabse" style=" margin-bottom: 2px !important;
 border: 1px solid gray !important;">Served<i class="fa fa-angle-up"></i></b-button>

 <b-collapse id="accordion-1" accordion="my-accordion" role="tabpanel" style="display:block" >
 <div v-for="user in users" :key="user.id" >
 
 <div v-if=" user[0].status=='active'">
 <div class="users">
 <div class="list-item" data-id="19">
 <div><a data-abc="true"><span class=""> 
 <b-avatar badge badge-variant="success" badge-left badge-top :text=user[0].customer.name.substring(0,1) size="50px"></b-avatar></span></a></div>
 <div class="flex"> <a :href="'/chat/' + user[0].id +'/' + id +'/'+user[0].client_id " class="item-author text-color" data-abc="true">{{ user[0].customer.name }}</a>
 <div v-if="user['messages']['message'].length < 20" class="item-except text-muted text-sm h-1x">{{user['messages']['message'] }}</div>
 <div v-else class="item-except text-muted text-sm h-1x">{{user['messages']['message'].substring(0,20)+".." }}</div>

 
 </div>
 <div class="no-wrap">
 
 <div class="item-date text-muted text-sm d-none d-md-block"><time-ago :datetime="user['messages']['created_at']" long></time-ago> </div>
 </div>
 </div>
 </div> 
 </div> 
 </div>
 </b-collapse>


 <b-button block v-b-toggle.accordion-2 variant="info" class="btn-collabse" style=" margin-bottom: 2px !important;
 border: 1px solid gray !important;">Unserved<i class="fa fa-angle-up"></i></b-button>

 
 <b-collapse id="accordion-2" visible accordion="my-accordion" role="tabpanel">
 <div v-for="user in users" :key="user.id" >
 
 <div v-if="user[0].status=='inactive'">
 <div class="users">
 <div class="list-item" data-id="19">
 <div><a data-abc="true"><span class=""> <b-avatar badge badge-variant="warning" badge-left badge-top :text=user[0].customer.name.substring(0,1) size="50px"></b-avatar></span></a></div>
 <div class="flex"> <a :href="'/chat/' + user[0].id +'/' + id +'/'+user[0].client_id " class="item-author text-color" data-abc="true">{{ user[0].customer.name }}</a>
 <div v-if="user['messages']['message'].length < 20" class="item-except text-muted text-sm h-1x">{{user['messages']['message'] }}</div>
 <div v-else class="item-except text-muted text-sm h-1x">{{user['messages']['message'].substring(0,20)+".." }}</div>

 </div>
 <div class="no-wrap">
 
 <div class="item-date text-muted text-sm d-none d-md-block"><time-ago :datetime="user['messages']['created_at']" long></time-ago> </div>
 </div>
 
 </div>
 </div>
 </div> 
 </div>
 </b-collapse>
 
 
 </div>
 
 
 
 </div>
 </div>
 </div>
 
</b-tab>
 <b-tab title="Closed">
 <div class=" page-container">
 <div class="padding">
 
 <div class="list list-row block">
 <div role="tablist">
 <div >
 
 <div>
 <div class="users">
 <div class="list-item" data-id="19">
 <div><a data-abc="true">
        <span class=""> 
        <div>

  <b-modal id="modal-1" title="BootstrapVue">
    <p class="my-4">Hello from modal!</p>
  </b-modal>
</div>

            <b-avatar v-b-modal.modal-1 badge badge-variant="danger" badge-left badge-top text="A" size="50px"></b-avatar>
        </span>
    </a></div>
 <div class="flex"> <a  class="item-author text-color" data-abc="true"> Andrew</a>
 <div class="item-except text-muted text-sm h-1x">blablaaa</div>

 
 </div>
 <div class="no-wrap">
 
 <div class="item-date text-muted text-sm d-none d-md-block"></div>
 </div>
 </div>
 </div>
 </div> 
 </div>
 </div>
 </div>
 
 </div>
 </div>
 </b-tab>
 
 </b-tabs></div>
 
 </div>
 </div>
 </div>

</template>

<script>
const config = {
 headers: {
 'Authorization': "Bearer " + window.localStorage.getItem("token"),
 'Content-Type' : 'application/json'
 }
 }


 export default {
 props: ['user'],

 data() {
 return {
 users: [],
 count:0,
 id:window.localStorage.getItem("id"),
 channel_id:0,
 last_messages:[],
 active_el:0,
 client_id:''
 }
 },

 



 }
</script>


<style>
.padding{
 margin-right: 2px;
}

.users{
 padding: 10px 5px!important;
 border-bottom: 1px solid #eee!important;
}
.users .col-md-6{
 align-self: center!important;
 padding: 0!important;
}
.users .col-md-6 a{
 padding: 10px!important;
 font-size: 12px!important;
 font-weight: 800!important;
 text-transform: capitalize!important;
}
.message_date{
 margin: 0px!important;
 font-size: 12px!important;
 color: #A2A0A0!important;
}
.message_chat{
 margin: 0!important;
 font-size: 14px!important;
}

 /* .active{
 padding-left: 10px!important;
 border-left: 3px solid #1E90FF!important;
 background-color: #eee!important;
 } */
 .card-header {
 height: 80px !important;
 padding: 25px !important;;
 background-color: #008 !important;
 border-bottom: 1px solid rgba(0,0,0,.05) !important;;
 color: #fff !important;;
 font-size: 18px !important;;
 font-weight: 600 !important;;
}
 .card{
 border: 1px solid rgba(0,0,0,.05)!important;
 border-radius: 0px!important;
 }
 .col-md-8 .card{
 border-top-left-radius:20px!important;
 border-bottom-left-radius:20px!important;
 }
 .col-md-4 .card{
 border-top-left-radius:20px!important;
 border-bottom-left-radius:20px!important;
 }
 .col-md-8 .card-header{
 padding: 15px 25px!important;


 border-top-left-radius:20px!important;
 }
 .col-md-4 .card-header{
 border-top-left-radius:20px!important;
 }
 .card-header .col-md-2{
 align-self: center;
 text-align: center;
}
.card-header .col-md-2 img{
 width:25px;
}
.card-body {padding: 0px !important;}
.card-body .input-group{
 padding: 1.25rem;
}
.input-group-btn a{
 width: 30px !important;
 padding: 0px !important;
 height: 30px !important;
 border-radius: 100% !important;
 line-height: 2.5 !important;
}
.input-group-btn a img{
 width:15px ;
}
.card-body .input-group input{
 border-radius: 20px !important;
}
 .message-area .message p{
 margin-left: 20px;
 background-color: dodgerblue;
 color: #fff;
 padding: 5px 10px;
 border-top-left-radius: 20px;
 border-top-left-radius: 20px;
 border-bottom-left-radius: 0px;
 border-bottom-left-radius: 20px;
 }
 .message-area .message{
 display:flex;
 }
 .users:active{
 padding-left: 10px;
 border-left: 3px solid #1e90ff;
 background-color: #eee; 
 }


a {
 color: #448bff;
 text-decoration: none;
 background-color: transparent
}

a:hover {
 color: #005ef7;
 text-decoration: underline
}

a:not([href]):not([tabindex]) {
 color: inherit;
 text-decoration: none
}

a:not([href]):not([tabindex]):focus,
a:not([href]):not([tabindex]):hover {
 color: inherit;
 text-decoration: none
}

a:not([href]):not([tabindex]):focus {
 outline: 0
}

@media (min-width:576px) {
 .col-sm {
 flex-basis: 0;
 flex-grow: 1;
 max-width: 100%
 }

 .col-sm-auto {
 flex: 0 0 auto;
 width: auto;
 max-width: 100%
 }

 .col-sm-1 {
 flex: 0 0 8.3333333333%;
 max-width: 8.3333333333%
 }

 .col-sm-2 {
 flex: 0 0 16.6666666667%;
 max-width: 16.6666666667%
 }

 .col-sm-3 {
 flex: 0 0 25%;
 max-width: 25%
 }

 .col-sm-4 {
 flex: 0 0 33.3333333333%;
 max-width: 33.3333333333%
 }

 .col-sm-5 {
 flex: 0 0 41.6666666667%;
 max-width: 41.6666666667%
 }

 .col-sm-6 {
 flex: 0 0 50%;
 max-width: 50%
 }

 .col-sm-7 {
 flex: 0 0 58.3333333333%;
 max-width: 58.3333333333%
 }

 .col-sm-8 {
 flex: 0 0 66.6666666667%;
 max-width: 66.6666666667%
 }

 .col-sm-9 {
 flex: 0 0 75%;
 max-width: 75%
 }

 .col-sm-10 {
 flex: 0 0 83.3333333333%;
 max-width: 83.3333333333%
 }

 .col-sm-11 {
 flex: 0 0 91.6666666667%;
 max-width: 91.6666666667%
 }

 .col-sm-12 {
 flex: 0 0 100%;
 max-width: 100%
 }

 .order-sm-first {
 order: -1
 }

 .order-sm-last {
 order: 13
 }

 .order-sm-0 {
 order: 0
 }

 .order-sm-1 {
 order: 1
 }

 .order-sm-2 {
 order: 2
 }

 .order-sm-3 {
 order: 3
 }

 .order-sm-4 {
 order: 4
 }

 .order-sm-5 {
 order: 5
 }

 .order-sm-6 {
 order: 6
 }

 .order-sm-7 {
 order: 7
 }

 .order-sm-8 {
 order: 8
 }

 .order-sm-9 {
 order: 9
 }

 .order-sm-10 {
 order: 10
 }

 .order-sm-11 {
 order: 11
 }

 .order-sm-12 {
 order: 12
 }

 .offset-sm-0 {
 margin-left: 0
 }

 .offset-sm-1 {
 margin-left: 8.3333333333%
 }

 .offset-sm-2 {
 margin-left: 16.6666666667%
 }

 .offset-sm-3 {
 margin-left: 25%
 }

 .offset-sm-4 {
 margin-left: 33.3333333333%
 }

 .offset-sm-5 {
 margin-left: 41.6666666667%
 }

 .offset-sm-6 {
 margin-left: 50%
 }

 .offset-sm-7 {
 margin-left: 58.3333333333%
 }

 .offset-sm-8 {
 margin-left: 66.6666666667%
 }

 .offset-sm-9 {
 margin-left: 75%
 }

 .offset-sm-10 {
 margin-left: 83.3333333333%
 }

 .offset-sm-11 {
 margin-left: 91.6666666667%
 }
}

.text-muted {
 color: #99a0ac !important
}

.block,
.card {
 background: #fff;
 border-width: 0;
 border-radius: .25rem;
 box-shadow: 0 1px 3px rgba(0, 0, 0, .05);
 margin-bottom: 1.5rem
}

.avatar {
 position: relative;
 line-height: 1;
 border-radius: 500px;
 white-space: nowrap;
 font-weight: 700;
 border-radius: 100%;
 display: -ms-flexbox;
 display: flex;
 -ms-flex-pack: center;
 justify-content: center;
 -ms-flex-align: center;
 align-items: center;
 -ms-flex-negative: 0;
 flex-shrink: 0;
 border-radius: 500px;
 box-shadow: 0 5px 10px 0 rgba(50, 50, 50, .15)
}

.avatar img {
 border-radius: inherit;
 width: 100%
}

.gd-primary {
 color: #fff;
 border: none;
 background: #448bff linear-gradient(45deg, #448bff, #44e9ff)
}

.gd-success {
 color: #fff;
 border: none;
 background: #31c971 linear-gradient(45deg, #31c971, #3dc931)
}

.gd-info {
 color: #fff;
 border: none;
 background: #14bae4 linear-gradient(45deg, #14bae4, #14e4a6)
}

.gd-warning {
 color: #fff;
 border: none;
 background: #f4c414 linear-gradient(45deg, #f4c414, #f45414)
}

@media (min-width:992px) {
 .page-container {
 max-width: 1140px;
 margin: 0 auto
 }

 .page-sidenav {
 display: block !important
 }
}

.list {
 padding-left: 0;
 padding-right: 0
}

.list-item {
 position: relative;
 display: -ms-flexbox;
 display: flex;
 -ms-flex-direction: column;
 flex-direction: column;
 min-width: 0;
 word-wrap: break-word
}

.list-row .list-item {
 -ms-flex-direction: row;
 flex-direction: row;
 -ms-flex-align: center;
 align-items: center;
 padding: .75rem .625rem
}

.list-row .list-item>* {
 padding-left: .625rem;
 padding-right: .625rem
}

.list-item .no-wrap {
 width: 50%;
 white-space: nowrap
}
.list-item .flex{ 
 width: 50%;
}
.text-color {
 color: #5e676f
}

.text-gd {
 -webkit-background-clip: text;
 -moz-background-clip: text;
 background-clip: text;
 -webkit-text-fill-color: transparent;
 -moz-text-fill-color: transparent;
 text-fill-color: transparent
}



.h-1x {
 height: auto;
 overflow: hidden;
 display: -webkit-box;
 -webkit-line-clamp: 1;
 -webkit-box-orient: vertical
}

.w-48 {
 width: 48px !important;
 height: 48px !important
}

a:link {
 text-decoration: none
}
.not-collapsed .fa-angle-up:before {
 content: "\f107";
}
.btn-info {
 color: #000!important;
 background:none!important;
 border: none!important;
}
.tab-content .tab-pane .list-row .btn-info i{
 padding-left: 25px;
}
.tab-content .tab-pane .list-row .btn-info{
 text-align: left;
}
.b-avatar .b-avatar-badge {

 font-size: 70% !important;
 
}
@media(max-width:767px){
 .card-body 
 {
 min-height: auto !important;
 }
}
.tab-content .active {
 border: none !important;
 background: none !important;
 padding-left: 0px!important;
}


</style>