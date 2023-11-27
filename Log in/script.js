const AccessKey = "lQUonzsttB6NoHeRwCnkXL1bonPl2yD0xPoIyHBu6eQ";
const Formel = document.querySelector("form");
const images = document.getElementById("images");
const inputel = document.getElementById("Search");
const buttonel=document.getElementById("next");
let page = 1;

Formel.addEventListener("submit", (event) => {
  event.preventDefault();
  const input = inputel.value;
 // images.innerHTML = ''; // Clear the images element before new search
 page=1; 
 FetchApi(input);
  
});

async function FetchApi(input1) {
  const url = `https://api.unsplash.com/search/photos?page=${page}&query=${input1}&client_id=${AccessKey}`;
  const response = await fetch(url);
  const data = await response.json();
  console.log(data);

  if(page==1){
    images.innerHTML="";
  }

  let result = data.results;

  result.map((result) => {
    const ImageWrapper = document.createElement("div");
    ImageWrapper.classList.add("image");
    
    const img = document.createElement("img");
    img.src = result.urls.small;
    img.alt = result.alt_description;

    const links = document.createElement("a");
    links.href = result.links.html;
    links.target = "_blank";
    links.textContent = result.alt_description;

    ImageWrapper.appendChild(img); // Fix: Append the image element
    ImageWrapper.appendChild(links); // Fix: Append the links element
    images.appendChild(ImageWrapper); // Fix: Append the ImageWrapper element
  });

  page++; // Increment the page number for the next search

  if(page>1){
    buttonel.style.display="block";
  }
  console.log(page);
}

buttonel.addEventListener("click",()=>{
  input = inputel.value;
  FetchApi(input);
})
