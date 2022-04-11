var myBtn = document.querySelector("button");
var myList = document.querySelector("ol");
var i = 0;
myBtn.addEventListener("click", () => {
  let Name = document.getElementById("Name").value;
  let Content = document.getElementById("Content").value;
  let li = document.createElement("li");
  li.setAttribute("id", "li" + i);
  li.innerHTML =
    Name +
    " : " +
    Content +
    "  <button onclick='Delete(" +
    i +
    ")'>&#10006</button>";
  myList.appendChild(li);
  i++;
});
function Delete(i) {
  let li = document.getElementById("li" + i);
  myList.removeChild(li);
}