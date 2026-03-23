function printResume() {
  window.print();
}

document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");
  cards.forEach(card => {
    card.addEventListener("mouseover", () => {
      card.style.boxShadow = "0 8px 18px rgba(199,166,255,.4)";
    });
    card.addEventListener("mouseout", () => {
      card.style.boxShadow = "0 4px 12px rgba(0,0,0,.08)";
    });
  });
});
