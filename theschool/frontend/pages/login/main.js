'use strict'
function login(){
let username= $("#username").val()
let password= $("#password").val()
ajax({
    url: "../../../back/api/api.php",
    type: 'GET',
    data:{table:'admins',
          data:{name:username,
                password:password}
        },
    success: function(rol) {
        switch(rol){
              case super_admin:
              alert("hello  super adminastrater")
        }

})


}