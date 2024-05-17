let cal = (function () {

  function submitForm() {
    var form = document.getElementById("form");
    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          document.getElementById("result").innerHTML = xhr.responseText;
        } else {
          console.error("There was a problem with the request.");
        }
      }
    };
    xhr.open("POST", form.action, true);
    xhr.send(formData);
  }

  return {};
})();