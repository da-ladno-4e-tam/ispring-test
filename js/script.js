var upButton = document.querySelector('.up-button');

window.addEventListener('scroll', trackScroll);
upButton.addEventListener('click', backToTop);

// upButton.onclick = function (evt) {
//   evt.preventDefault();

// }

window.onload = function () {
  upButton.classList.add('hidden');
}

function trackScroll() {
  var scrolled = window.pageYOffset;
  var viewHeight = document.documentElement.clientHeight;

  if (scrolled > viewHeight) {
    upButton.classList.add('up-button-show');
    upButton.classList.remove('hidden');
  }
  if (scrolled < viewHeight) {
    upButton.classList.remove('up-button-show');
    upButton.classList.add('hidden');
  }
}

function backToTop() {
  upButton.removeAttribute('href')
  if (window.pageYOffset > 0) {
    window.scrollBy(0, -50);
    setTimeout(backToTop, 0);
  }
}