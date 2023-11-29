//CODE FROM ARYAN

// let ingredientCount = 1;
// let ingredients = [];

// function addIngredient() {
//   const searchBars = document.getElementById("searchBars");
//   const input = document.createElement("input");
//   input.type = "text";
//   input.name = `ingredient_${ingredientCount}`;
//   input.placeholder = "Enter an ingredient";
//   searchBars.appendChild(input);
//   ingredientCount++;
// }

// function generate() {
//   const searchForm = document.getElementById("searchForm");
//   const ingredientInputs = searchForm.querySelectorAll(
//     'input[name^="ingredient_"]'
//   );

//   ingredients = Array.from(ingredientInputs).map((input) =>
//     input.value.toLowerCase().trim()
//   );

//   const resultDiv = document.getElementById("result");
//   const dish = findDish(ingredients);

//   if (dish) {
//     resultDiv.innerHTML = `<p>You can make: ${dish}</p>`;
//   } else {
//     resultDiv.innerHTML = `<p>No dish can be made from these ingredients.</p>`;
//   }
// }

// function findDish(ingredients) {
//   const dishes = {
//     pasta: ["pasta", "tomato", "cheese"],
//     salad: ["lettuce", "tomato", "cucumber"],
//     // Add more dishes and their respective ingredient arrays here
//   };

//   for (const dish in dishes) {
//     const requiredIngredients = dishes[dish];
//     const ingredientsMatch = requiredIngredients.every((ingredient) =>
//       ingredients.includes(ingredient)
//     );
//     if (ingredientsMatch) {
//       return dish;
//     }
//   }

//   return null;
// }





var survey_options = document.getElementById('gen_recipe');
 var add_more_fields = document.getElementById('add_more_fields');
var remove_fields = document.getElementById('remove_fields');

add_more_fields.onclick = function(){
  var newField = document.createElement('input');
  newField.setAttribute('type','text');
  newField.setAttribute('name','gen_recipe[]');
  newField.setAttribute('class','gen_recipe');
  newField.setAttribute('siz',50);
  newField.setAttribute('placeholder','Another Ingredient');
  survey_options.appendChild(newField);
}

// remove_fields.onclick = function(){
//   var input_tags = survey_options.getElementsByTagName('input');
//   if(input_tags.length > 2) {
//     survey_options.removeChild(input_tags[(input_tags.length) - 1]);
//   }
//}