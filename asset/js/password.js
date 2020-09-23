const togglepaswword=document.querySelector(`#togglepasword`);const password=document.querySelector(`#password`);
togglepaswword.addEventListener(`click`,function(e)
{
    //toggle the type artibute const type=
password.getAttribute(`type`)===`password`?`text`:`password`;
 password.setAttribute(`type`,`type`);
 //toggle the eye slash icon ths.classlist.toggle(`fa-eye-slash`);
});