let slideIndex = 0;
showSlide(slideIndex);

function changeSlide(n) {
  showSlide((slideIndex += n));
}

function showSlide(n) {
  const slides = document.querySelectorAll(".slide");
  if (n >= slides.length) {
    slideIndex = 0;
  } else if (n < 0) {
    slideIndex = slides.length - 1;
  }
  slides.forEach((slide, index) => {
    slide.style.display = index === slideIndex ? "block" : "none";
  });
}

function openModal(imageSrc, altText) {
  const modal = document.getElementById("myModal");
  const modalImg = document.getElementById("modalImage");
  const caption = document.getElementById("caption");

  modal.style.display = "block";
  modalImg.src = imageSrc;
  modalImg.alt = altText;
  caption.textContent = captionText;
}

function closeModal() {
  const modal = document.getElementById("myModal");
  modal.style.display = "none";
}
