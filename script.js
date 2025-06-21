
function contactarPorWsp(producto) {
  const numero = "5491234567890"; // Cambia este número por el tuyo
  const mensaje = `Hola, estoy interesado/a en comprar: ${producto}. ¿Está disponible?`;
  const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;
  window.open(url, '_blank');
}
