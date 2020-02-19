 function validateForm()
 {
     
     var good =true;
     //validate name
     if (document.getElementById('name').value.trim()=='') {
         alert("Name is a mandatory field.  Please complete");
         good=false;
     }
     
     //validate   telephone
         if (document.getElementById('telephone').value.trim()=='') {
         alert("Telephone is a mandatory field.  Please complete");
         good=false;
     }
     
     //collectionDate
     if (document.getElementById('collectionDate').value.trim()=='') {
         alert("Collection Date is a mandatory field.  Please complete");
         good=false;
     }
     //deliveryDate
     if (document.getElementById('deliveryDate').value.trim()=='') {
         alert("Delivery Date is a mandatory field.  Please complete");
         good=false;
     }
     
     if (document.getElementById('collectionDate').value > 
             document.getElementById('deliveryDate').value) {
         alert("The delivery cannot be later than the delivery date");
         good=false;
     }
     
     if (good){
         alert("Successful validation and submission");
     }
     
     return good;
 }
 
 function calculateForm(){
    
     
     var sum=0;
     for (var i=1; i <=33;i++){
         var quantityName = "q" + i;
         var costName = "w" + i;
         
         var quantity = document.getElementById(quantityName).value;
         var cost = document.getElementById(costName).value;
         
         if (quantity=="" && cost!="0"){
             alert("Please double check the form. You have entered a cost but no quantity for at least one of the items");
             return; 
         }
         
         if (quantity!="" && cost=="0"){
             alert("Please double check the form. You have entered a quantity but no cost for at least one of the items");
             return; 
         }
         
         
         var answer = quantity * cost;
         sum=sum+answer;
       
         
     }
    
document.getElementById('total').value=Number(sum).toFixed(2);;
document.getElementById('grandtotal').value=Number(sum*1.13).toFixed(2);;

     
 }
