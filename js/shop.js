var shopproducts=[
    {
	"id": 1,
	"title": "Fjallraven",
	"price": 10.95,
	"description": "Your perfect pack for everyday use and walks in the forest. Stash your laptop (up to 15 inches) in the padded sleeve, your everyday",
	"category": "men's clothing",
	"image": "https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg",
	"rating": {
		"rate": 3.9,
		"count": 120
	}
}, {
	"id": 2,
	"title": "Mens Casual Premium ",
	"price": 2.3,
	"description": "Slim-fitting style, contrast raglan long sleeve, three-button henley placket, light weight & soft fabric for breathable and comfortable wearing. And Solid stitched shirts with round neck made for durability and a great fit for casual fashion wear and diehard baseball fans. The Henley style round neckline includes a three-button placket.",
	"category": "men's clothing",
	"image": "https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg",
	"rating": {
		"rate": 4.1,
		"count": 259
	}
}, {
	"id": 3,
	"title": "Mens Cotton Jacket",
	"price": 5.99,
	"description": "great outerwear jackets for Spring/Autumn/Winter, suitable for many occasions, such as working, hiking, camping, mountain/rock climbing, cycling, traveling or other outdoors. Good gift choice for you or your family member. A warm hearted love to Father, husband or son in this thanksgiving or Christmas Day.",
	"category": "men's clothing",
	"image": "https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg",
	"rating": {
		"rate": 4.7,
		"count": 500
	}
}, {
	"id": 4,
	"title": "Mens Casual Slim Fit",
	"price": 15.99,
	"description": "The color could be slightly different between on the screen and in practice. / Please note that body builds vary by person, therefore, detailed size information should be reviewed below on the product description.",
	"category": "men's clothing",
	"image": "https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg",
	"rating": {
		"rate": 2.1,
		"count": 430
	}
}, {
	"id": 5,
	"title": "John Hardy Women's Legends",
	"price": 6,
	"description": "From our Legends Collection, the Naga was inspired by the mythical water dragon that protects the ocean's pearl. Wear facing inward to be bestowed with love and abundance, or outward for protection.",
	"category": "jewelery",
	"image": "https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg",
	"rating": {
		"rate": 4.6,
		"count": 400
	}
}, {
	"id": 6,
	"title": "Solid Gold Petite",
	"price": 16.8,
	"description": "Satisfaction Guaranteed. Return or exchange any order within 30 days.Designed and sold by Hafeez Center in the United States. Satisfaction Guaranteed. Return or exchange any order within 30 days.",
	"category": "jewelery",
	"image": "https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg",
	"rating": {
		"rate": 3.9,
		"count": 70
	}
}
];

var orderproducts =[]

var taxpercent =0.13;
var tax = 0;
var subtotal =0;
var total =0;


function updatedisplay(){
    document.getElementById("cartnumber").innerText = orderproducts.length;
}


function showcartdisplay(){
    clearerrmsg(1);

    if(orderproducts.length < 1){
        //alert("Please Add an item to the cart");
        showerrmsg(1,"Please Add an item to the cart")
        return;
    }  

    if(subtotal < 10){
        //alert("Please The Item You add to cart is less than $10");
        showerrmsg(1,"Please The Item You add to cart is less than $10")
        return;
    } 

    document.location=`http://localhost/store/form.php?itemnum=${orderproducts.length}&itemprice=${subtotal}`
}


function showcart(){
    subtotal =  0;

    for (var i =0; i < orderproducts.length; i++ ){
        subtotal =  subtotal + orderproducts[i].price;
    }

    tax = taxpercent * subtotal;
    total = (subtotal + tax).toFixed(2);
}

function showproducts(){

    var productsitems ="";
   
    for (var i =0; i < shopproducts.length; i++ ){
        productsitems= productsitems+ " <div class='my-col l4 s16 m4 my-padding'> <div class='my-card my-col my-border my-round ' style='min-height:100px; margin-top: 10px;'>"
        productsitems= productsitems+ " <div class='my-col my-center'>"
        productsitems= productsitems+ "     <img src='"+  shopproducts[i].image +"' class='my-image' style='max-width:100%; height:200px' />"
        productsitems= productsitems+ "  </div>"
        productsitems= productsitems+ "  <div class='my-col my-padding'>"
        productsitems= productsitems+ "       <br />"
        productsitems= productsitems+ "     <b>  "+  shopproducts[i].title+" </b> <br />"
        productsitems= productsitems+ "     <b>  $"+  shopproducts[i].price+" </b>  <br />"
        productsitems= productsitems+ "     <a onclick='addtocart("+ i +")' class='my-btn my-round my-blue'> Add to cart</a>"
        productsitems= productsitems+ " </div>"
        productsitems= productsitems+ " </div> </div>"
    }
    document.getElementById("displayproducts").innerHTML = productsitems;

}

function addtocart(index){
    clearerrmsg(1)
    for(var i=0; i < orderproducts.length; i++){
        if(orderproducts[i].id ==shopproducts[index].id){
            showerrmsg(1,"This Item is already on your cart")
            alert("This Item is already on your cart")
            return;
        }
    }
    alert("Item Added to Cart")
    orderproducts[orderproducts.length] = shopproducts[index]
    showcart();
    updatedisplay();
}

function removecart(index){
    orderproducts.splice(index,1)
    alert("Item Remove from cart")
    showcart();
    updatedisplay();
}


function showerrmsg(index,msg){
 document.getElementById("errmsgpage"+index).innerText =msg;
}

function clearerrmsg(index){
    document.getElementById("errmsgpage"+index).innerText ="";
}


showproducts();
showcart();
updatedisplay();
