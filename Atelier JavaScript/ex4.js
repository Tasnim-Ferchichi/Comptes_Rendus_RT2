function change_color(i) {
    let li = document.getElementById("li" + i);
    li.style.color =
      "rgb(" +
      Math.floor(Math.random(1) * 255) +
      "," +
      Math.floor(Math.random(1) * 255) +
      "," +
      Math.floor(Math.random(1) * 255) +
      ")";
  }