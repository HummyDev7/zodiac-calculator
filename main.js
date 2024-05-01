const homePageToggle = ( function() {
  let homeContainer = document.querySelector('.home__content');
  let inputContainer = document.querySelector('.input__page');
  let continueButton = document.querySelector('.continue__btn');

  continueButton.addEventListener('click', toggleContainer);

  function toggleContainer() {
    homeContainer.style.display = "none";
    inputContainer.style.display = "block";
  }

})();