$(document).ready(function (){

  $(document).on('click','#insert-contact',function(){

    if ($('#Name').val()=="" || validateEmail($('#Email').val()) =="" || $('#Comment').val()==""){
				alert('Please input data first');
		} else {

      $user = $('#Name').val();
      $email = $('#Email').val();
      $comment = $('#Comment').val();

      /* for insert user from a list */
      $.ajax({
        type: "POST",
        url: "functions/insert.php",
        data: {
          user : $user,
          email : $email,
          comment : $comment,
          insert : 1
        },
					success: function(response){
						$('#alert-display').html(response);
              $('#Name').val("");
              $('#Email').val("");
              $('#Comment').val("");
            showUsers();
					}
      });

    }
  });

  /* for delete user from a list */
  $(document).on('click', '.btn-users-delete', function (){
    $user_id = $(this).attr('num-user');

    $.ajax({
      type: "POST",
      url: "functions/delete-user.php",
      data: {
        user_id : $user_id,
        delete : 1
      },
      success : function (response){
        $('#alert-display').html(response);
        showUsers();
      }
    });
  });

});

showUsers();

/* desplay list of users.*/
function showUsers() {
  $.ajax({
    type: "POST",
    url: "functions/display-infos.php",
    data: {
      infos: 1
    },
      success: function (response) {
        $('#display-info').html(response);
      }
  });
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
