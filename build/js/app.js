function eventListeners(){document.querySelector(".mobile-menu").addEventListener("click",navegacionResponsive)}function navegacionResponsive(){document.querySelector(".navegacion").classList.toggle("mostrar")}document.addEventListener("DOMContentLoaded",(function(){eventListeners();var e=L.map("mapa").setView([52.031419,8.527204],18);L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'}).addTo(e),L.marker([52.031419,8.527204]).addTo(e).bindPopup("der Spanier <br> Jollenbecker Straße 57").openPopup()}));var swiper=new Swiper(".swiper",{effect:"cube",grabCursor:!0,cubeEffect:{shadow:!0,slideShadows:!0,shadowOffset:20,shadowScale:.94},pagination:{el:".swiper-pagination"}});
//# sourceMappingURL=app.js.map