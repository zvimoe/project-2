'use strict'
function login(){
let username= $("#username").val()
let password= $("#password").val()
$.ajax({
    url: "../../../backnd/API.php",
    type: 'DELETE',
    data:{action:'login',
          data:{name:username,
                password:password}
        },
    success: function(mainContainer) {
              
      $("#loginbox").replaceWith(mainContainer);
      
              }
})
}
function addAndUpdate(){
       




}