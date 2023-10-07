const htmlBody = document.querySelector('body');

const randomClickFunction = function () {
  const colors = ["#008080", "#4169E1", "#000080", "#A52A2A", "#2F4F4F", "brown", "purple", "red"];
  const randomIndex = Math.floor(Math.random() * colors.length);
  const randomColor = colors[randomIndex]; 
  htmlBody.style.backgroundColor = randomColor;
  console.log('The user clicked and set the color to ' + randomColor);
}
randomClickfunction()
       htmlBody.Onclick = randomClickFunction;
