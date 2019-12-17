let createButton = document.getElementById('create-button');
let createForm = document.getElementById('create-form');
let isCreateFormDisplaying = false; 

let updateButton = document.getElementById('update-button');
let updateForm = document.getElementById('update-form');
let isUpdateFormDisplaying = false; 

let deleteButton = document.getElementById('delete-button');
let deleteForm = document.getElementById('delete-form');
let isDeleteFormDisplaying = false; 


//Toggle Form
createButton.onclick = function(){
    
    if(isCreateFormDisplaying==false){
        //Displaying the form
        createForm.style.display = 'block';
        isCreateFormDisplaying = true;
    }else{
        //Hide the form
        createForm.style.display = 'none';
        isCreateFormDisplaying = false; 
    }
}

//Toggle Update Form 
updateButton.onclick = function(){
    
    if(isUpdateFormDisplaying==false){
        //Display the Update form
        updateForm.style.display = 'block';
        isUpdateFormDisplaying = true; 
    }else{
        //Hide the form 
        updateForm.style.display = 'none';
        isUpdateFormDisplaying = false; 
    }
}

//Toggle Delete Form 
deleteButton.onclick = function(){
    
    if(isDeleteFormDisplaying==false){
        //Display the Delete form
        deleteForm.style.display = 'block';
        isDeleteFormDisplaying = true;
    }else{
        //Hide the form
        deleteForm.style.display = 'none';
        isDeleteFormDisplaying = false; 
    }
}



