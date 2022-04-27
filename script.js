let product = {
  data:[{
    productName:"SAQTA hoodie",
    category:"Hoodie",
    price:"20.000",
    image:"hudi1.jpg",
  },
  {
      productName:"QATYQ hoodie",
      category:"Hoodie",
      price:"16.000-20.000",
      image:"hudi2.jpg",
  },
  {
      productName:"BORN QAZAQ hoodie",
      category:"Hoodie",
      price:"18.000",
      image:"xudi4.jpg",
  },
  {
      productName:"QMIR OZEN hoodie",
      category:"Hoodie",
      price:"18.000",
      image:"xudi4.jpg",
  },
  {
      productName:"SEN hoodie",
      category:"Hoodie",
      price:"18.000",
      image:"hudi6.jpg",
  },
  {
      productName:"KOP SOZ hoodie",
      category:"Hoodie",
      price:"18.000",
      image:"hudi7.jpg",
  },
  {
      productName:"SEN sweatshirt",
      category:"Sweatshirt",
      price:"15.000",
      image:"hudi3.jpg",
  },
  {
      productName:"QR shirt",
      category:"Shirt",
      price:"8.500",
      image:"shirt1.jpg",
  },
  {
      productName:"JAQSY KUNDER shirt",
      category:"Shirt",
      price:"8.500",
      image:"shirt2.jpg",
  },
  {
      productName:"BTBQ shirt",
      category:"Shirt",
      price:"8.500",
      image:"shirt3.jpg",
  },
  {
      productName:"QREP shirt",
      category:"Shirt",
      price:"8.500",
      image:"shirt4.jpg",
  },
  {
      productName:"QREP shirt",
      category:"Shirt",
      price:"8.500",
      image:"shirt5.jpg",
  },
 ],
};
for(let i of product.data){
  let card=document.createElement("div");
  card.classList.add("card", i.category, "hide");
  let imgContainer=document.createElement("div");
  imgContainer.classList.add("image-container");
  let image=document.createElement("img");
  image.setAttribute("src", i.image);
  imgContainer.appendChild(image);
  card.appendChild(imgContainer);
  let container=document.createElement("div");
  container.classList.add("container");
  let name = document.createElement("h5");
  name.classList.add("product-name");
  name.innerText=i.productName;
  container.appendChild(name);
  let price=document.createElement("h6");
  price.innerText=i.price + " KZT";
  container.appendChild(price);

  card.appendChild(container);
  document.getElementById("product").appendChild(card);
}

function filterProduct(value){
  let buttons = document.querySelectorAll(".button-value");
  buttons.forEach((button)=>{
  if(value.toUpperCase()==button.innerText.toUpperCase()){
    button.classList.add("active");
  }
  else {
    button.classList.remove("active");
  }
});
  let elements=document.querySelectorAll(".card");
  elements.forEach((element)=> {
    if(value=="all"){
      element.classList.remove("hide");
    }
    else {
      if(element.classList.contains(value)){
        element.classList.remove("hide");
      }
      else {
        element.classList.add("hide")
      }
    }
  });
}

window.onload=()=>{
  filterProduct("all");
};
