// ANIME PATH
// const paths = document.querySelectorAll('.animated-path');
//   let currentPathIndex = 0;

//   function animasiPath() {
//     if (currentPathIndex < paths.length) {
//       paths[currentPathIndex].style.animation = 'drawLine 1s forwards';
      
//       currentPathIndex++;
//       setTimeout(animasiPath, 300); // Waktu delay antara setiap animasi path
//     } else {
//       currentPathIndex = 0;
//       paths.forEach(path => {
//         path.style.animation = 'none';
//         path.offsetHeight; // Trigger reflow
//       });
//       setTimeout(animasiPath, 100); // Delay sebelum memulai lagi dari awal
//     }
//   }

//   animasiPath();

// const coords = { x: 0, y: 0 };
// const circles = document.querySelectorAll(".circle");

// const colors = [
//   "#ffb56b",
//   "#fdaf69",
//   "#f89d63",
//   "#f59761",
//   "#ef865e",
//   "#ec805d",
//   "#e36e5c",
//   "#df685c",
//   "#d5585c",
//   "#d1525c",
//   "#c5415d",
//   "#c03b5d",
//   "#b22c5e",
//   "#ac265e",
//   "#9c155f",
//   "#950f5f",
//   "#830060",
//   "#7c0060",
//   "#680060",
//   "#60005f",
//   "#48005f",
//   "#3d005e"
// ];

// circles.forEach(function (circle, index) {
//   circle.x = 0;
//   circle.y = 0;
//   circle.style.backgroundColor = colors[index % colors.length];
// });

// window.addEventListener("mousemove", function(e){
//   coords.x = e.clientX;
//   coords.y = e.clientY;
  
// });

// function animateCircles() {
  
//   let x = coords.x;
//   let y = coords.y;
  
//   circles.forEach(function (circle, index) {
//     circle.style.left = x - 12 + "px";
//     circle.style.top = y - 12 + "px";
    
//     circle.style.scale = (circles.length - index) / circles.length;
    
//     circle.x = x;
//     circle.y = y;

//     const nextCircle = circles[index + 1] || circles[0];
//     x += (nextCircle.x - x) * 0.3;
//     y += (nextCircle.y - y) * 0.3;
//   });
 
//   requestAnimationFrame(animateCircles);
// }

// animateCircles();

// SECIION NAMA
document.addEventListener("DOMContentLoaded", () => {
  // Ambil kelas nama
  const nama = document.querySelector('.nama');
  // Bungkus jadi sebuah teks
  const text = nama.innerText;
  // Ubah jadi array
  const hurufArray = [...text].map((huruf, index) => {
      const span = document.createElement('span');
      // Cek apakah karakter adalah spasi
      if (huruf === ' ') {
          span.innerHTML = '&nbsp;';
      } else {
          span.innerText = huruf;
      }
      // Tambahkan sedikit waktu tambahan untuk jeda animasi per huruf
      span.style.animationDelay = `${index * 0.17}s`;
      return span.outerHTML;
  }).join('');
  nama.innerHTML = hurufArray;
});

// SWAP