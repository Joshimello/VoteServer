//made with ❤ by Joshimello
function onSignIn(googleUser) {
      user = googleUser
      $('.g-signin2').remove()
      $('.logininfo').remove()
      $('#user').text('email: '+googleUser.getBasicProfile().getEmail())
      $('.userwrapper').append('<a id="signout" href="#" onclick="signOut();">sign out</a>')
      $('.votecontent').load('votecontent.php')
}

function signOut() {
      var auth2 = gapi.auth2.getAuthInstance();
      auth2.signOut().then(function () {
            $('.userwrapper').empty()
            $('.votecontent').empty()
            location.reload();
      });
}

function submitform(){
    $('#useremail').val(user.getBasicProfile().getEmail())
    document.forms["mainform"].submit();
}