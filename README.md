[]([![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/BigOven/functions?utm_source=RapidAPIGitHub_BigOvenFunctions&utm_medium=button&utm_content=RapidAPI_GitHub))

# BigOven Package
Connect to the BigOven recipe API to search and display 350,000+ recipes, reviews and ingredient lists. Test an API call and export the code into your app now.
* Domain: bigoven.com
* Credentials: apiKey

## How to get credentials: 
0. Item one 
1. Item two 

## BigOven.getSingleRecipeCollection
Gets a recipe collection. A recipe collection is a curated set of recipes.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your API Key.
| bigovenUsername  | String     | Username of user.
| bigovenPassword  | String     | Password of user.
| collectionId     | Number     | The collection identifier.
| resultsPerPage   | Number     | Results per page (int).
| pageNumber       | Number     | The page (int), starting with 1.
| test             | Boolean    | Test (Boolean).
| sessionForLogging| String     | Session for logging.

## BigOven.getRecipeCollectionMetadata
Gets a recipe collection metadata. A recipe collection is a curated set of recipes.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| collectionId   | Number     | The collection identifier.

## BigOven.getRecipeCollections
Get the list of current, seasonal recipe collections. From here, you can use the /collection/{id} endpoint to retrieve the recipes in those collections.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| test           | String     | Test.

## BigOven.getFoodGlossaryArticleByTerm
Get food glossary article by term (e.g., asparagus). This editorial is (c) BigOven and MUST carry attribution and a link back to the glossary entry on BigOven.com.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| term           | String     | Keyword used to look up article, e.g., asparagus.

## BigOven.getFoodGlossaryArticle
Get food glossary article.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| articleId      | Number     | Identifier of article to retrieve.

## BigOven.deleteItemsFromGroceryList
Delete all the items on a grocery list; faster operation than a sync with deleted items.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.

## BigOven.getMyGroceryList
Get the user's grocery list. User is determined by Basic Authentication.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.

## BigOven.departmentalizeItemsInGroceryList
Departmentalize a list of strings. Used for ad-hoc grocery list item addition.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| model          | String     | Items list.

## BigOven.addSingleItemToGroceryList
Add a single line item to the grocery list.

| Field            | Type       | Description
|------------------|------------|----------
| apiKey           | credentials| Your API Key.
| bigovenUsername  | String     | Username of user.
| bigovenPassword  | String     | Password of user.
| newItemName      | String     | newItemName
| newItemQuantity  | String     | newItemQuantity
| newItemUnit      | String     | newItemUnit
| newItemNotes     | String     | newItemNotes
| newItemDepartment| String     | newItemDepartment

## BigOven.deleteItemFromGroceryList
Will delete this item assuming you own it.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| GUID           | String     | Grocery list item id (GUID).

## BigOven.updateGroceryItem
Update a grocery item by GUID

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your API Key.
| bigovenUsername    | String     | Username of user.
| bigovenPassword    | String     | Password of user.
| guid               | String     | Grocery list item id (GUID).
| requisiteName      | String     | Grocery item requisite name.
| requisiteQuantity  | String     | Grocery item requisite quantity.
| requisiteUnit      | String     | Grocery item requisite unit.
| requisiteNotes     | String     | Grocery item requisite notes.
| requisiteDepartment| String     | Grocery item requisite department.

## BigOven.addRecipeToGroceryList
Add a Recipe to the grocery list.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | String     | The recipe identifier.
| scale          | String     | Scale=1.0 says to keep the recipe the same size as originally posted.
| markAsPending  | Boolean    | Indicate that the lines in the recipe should be marked in a "pending" (unconfirmed by user) state.

## BigOven.synchronizeGroceryList
Synchronize the grocery list.

| Field           | Type       | Description
|-----------------|------------|----------
| apiKey          | credentials| Your API Key.
| bigovenUsername | String     | Username of user.
| bigovenPassword | String     | Password of user.
| requisiteItems  | Array      | Array of JSON objects, grocery list items.
| requisiteRecipes| Array      | Array of JSON objects, grocery list recipes.
| since           | String     | Grocery since.

#### Example of requisiteItems input format
```json
[
  {
    "ItemID": 0,
    "GUID": "string",
    "RecipeID": 0,
    "Name": "string",
    "Notes": "string",
    "DisplayQuantity": "string",
    "Department": "string",
    "IsChecked": true,
    "LocalStatus": "string",
    "BigOvenObject": "string",
    "ThirdPartyURL": "string"
  }
]
```

#### Example of requisiteRecipes input format
```json
[
    {
        "RecipeID": 0,
        "Title": "string",
        "Cuisine": "string",
        "Category": "string",
        "Subcategory": "string",
        "Microcategory": "string",
        "StarRating": 0,
        "StarRatingIMG": "string",
        "WebURL": "string",
        "ImageURL": "string",
        "ImageURL120": "string",
        "ReviewCount": 0,
        "Poster": {
            "UserID": 0,
            "UserName": "string",
            "ImageURL48": "string",
            "PhotoUrl": "string",
            "IsPremium": true,
            "IsKitchenHelper": true,
            "IsUsingRecurly": true,
            "FirstName": "string",
            "LastName": "string"
        },
        "IsPrivate": true,
        "HideFromPublicSearch": true,
        "IsBookmark": true,
        "BookmarkURL": "string",
        "YieldNumber": 0,
        "QualityScore": 0,
        "MaxImageSquare": 0,
        "TotalTries": 0,
        "HeroPhotoUrl": "string"
    }
]
```

## BigOven.createRecipe
Add a new recipe.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Your API Key.
| bigovenUsername     | String     | Username of user.
| bigovenPassword     | String     | Password of user.
| title               | String     | Recipe title.
| description         | String     | Recipe description.
| category            | String     | Recipe category.
| subcategory         | String     | Recipe subcategory.
| primaryIngredient   | String     | Recipe primary ingredient.
| cuisine             | String     | Recipe cuisine.
| microcategory       | String     | Recipe microcategory.
| starRating          | Number     | Recipe star rating.
| imageURL            | String     | Recipe image url.
| instructions        | String     | Recipe instructions.
| yieldNumber         | Number     | Recipe yield number.
| yieldUnit           | String     | Recipe yield unit.
| totalMinutes        | Number     | Recipe total minutes.
| activeMinutes       | Number     | Recipe active minutes.
| isPrivate           | Boolean    | Recipe is private.
| isBookmark          | Boolean    | Recipe is bookmark.
| bookmarkURL         | String     | Recipe bookmark url.
| bookmarkSiteLogo    | String     | Recipe bookmark site logo.
| bookmarkImageURL    | String     | Recipe bookmark image url.
| adTags              | String     | Recipe ad tags.
| ingredientsTextBlock| String     | Recipe ingredients text block.
| allCategoriesText   | String     | Recipe all categories text.
| isSponsored         | Boolean    | Recipe is sponsored.
| collection          | String     | Recipe collection.
| collectionID        | Number     | Recipe collection identifier.
| adminBoost          | Number     | Recipe admin boost.
| poster              | JSON       | SONObject, recipe poster.

#### Example of poster input format
```json
{
    "UserID": 0,
    "UserName": "string",
    "ImageURL48": "string",
    "PhotoUrl": "string",
    "IsPremium": true,
    "IsKitchenHelper": true,
    "IsUsingRecurly": true,
    "FirstName": "string",
    "LastName": "string"
}
```

## BigOven.updateRecipe
Update a recipe.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Your API Key.
| bigovenUsername     | String     | Username of user.
| bigovenPassword     | String     | Password of user.
| recipeID            | Number     | Recipe identifier.
| ingredients         | Array      | Array of JSON objects, recipe ingredients.
| title               | String     | Recipe title.
| description         | String     | Recipe description.
| category            | String     | Recipe category.
| subcategory         | String     | Recipe subcategory.
| primaryIngredient   | String     | Recipe primary ingredient.
| cuisine             | String     | Recipe cuisine.
| microcategory       | String     | Recipe microcategory.
| starRating          | Number     | Recipe star rating.
| imageURL            | String     | Recipe image url.
| instructions        | String     | Recipe instructions.
| yieldNumber         | Number     | Recipe yield number.
| yieldUnit           | String     | Recipe yield unit.
| totalMinutes        | Number     | Recipe total minutes.
| activeMinutes       | Number     | Recipe active minutes.
| isPrivate           | Boolean    | Recipe is private.
| isBookmark          | Boolean    | Recipe is bookmark.
| bookmarkURL         | String     | Recipe bookmark url.
| bookmarkSiteLogo    | String     | Recipe bookmark site logo.
| bookmarkImageURL    | String     | Recipe bookmark image url.
| adTags              | String     | Recipe ad tags.
| ingredientsTextBlock| String     | Recipe ingredients text block.
| allCategoriesText   | String     | Recipe all categories text.
| isSponsored         | Boolean    | Recipe is sponsored.
| collection          | String     | Recipe collection.
| collectionID        | Number     | Recipe collection identifier.
| adminBoost          | Number     | Recipe admin boost.
| nutritionInfo       | JSON       | JSON objects, recipe nutrition info.
| poster              | JSON       | JSON Object, recipe poster.

#### Example of ingredients input format
```json
[
    {
        "IngredientID": 0,
        "DisplayIndex": 0,
        "IsHeading": true,
        "Name": "string",
        "HTMLName": "string",
        "Quantity": 0,
        "DisplayQuantity": "string",
        "Unit": "string",
        "MetricQuantity": 0,
        "MetricDisplayQuantity": "string",
        "MetricUnit": "string",
        "PreparationNotes": "string",
        "IngredientInfo": {
            "Name": "string",
            "Department": "string",
            "MasterIngredientID": 0,
            "UsuallyOnHand": true
        },
        "IsLinked": true
    }
]
```

#### Example of nutritionInfo input format
```json
{
    "SingularYieldUnit": "string",
    "TotalCalories": 0,
    "TotalFat": 0,
    "CaloriesFromFat": 0,
    "TotalFatPct": 0,
    "SatFat": 0,
    "SatFatPct": 0,
    "MonoFat": 0,
    "PolyFat": 0,
    "TransFat": 0,
    "Cholesterol": 0,
    "CholesterolPct": 0,
    "Sodium": 0,
    "SodiumPct": 0,
    "Potassium": 0,
    "PotassiumPct": 0,
    "TotalCarbs": 0,
    "TotalCarbsPct": 0,
    "DietaryFiber": 0,
    "DietaryFiberPct": 0,
    "Sugar": 0,
    "Protein": 0,
    "ProteinPct": 0
}
```

#### Example of poster input format
```json
{
    "UserID": 0,
    "UserName": "string",
    "ImageURL48": "string",
    "PhotoUrl": "string",
    "IsPremium": true,
    "IsKitchenHelper": true,
    "IsUsingRecurly": true,
    "FirstName": "string",
    "LastName": "string"
}
```

## BigOven.getRecipeAutocomplete
Given a query, return recipe titles starting with query. Query must be at least 3 chars in length.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| query          | String     | Query for search.
| limit          | Number     | Search result limit.

## BigOven.getRecipeCategories
Get a list of recipe categories.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.

## BigOven.deleteMyReviewReply
DELETE a reply to a given review. Authenticated user must be the one who originally posted the reply.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| replyId        | String     | Review reply identifier.

## BigOven.updateMyReviewReply
Update (PUT) a reply to a given review. Authenticated user must be the original one that posted the reply.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| replyId        | String     | Review reply identifier.
| data           | String     | Review reply data.

## BigOven.getSingleReview
Get a given review by string-style ID. This will return a payload with FeaturedReply, ReplyCount. Recommended display is to list top-level reviews with one featured reply underneath. Currently, the FeaturedReply is the most recent one for that rating.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| reviewId       | String     | Review identifier.

## BigOven.updateReview
Update a given top-level review.

| Field              | Type       | Description
|--------------------|------------|----------
| apiKey             | credentials| Your API Key.
| bigovenUsername    | String     | Username of user.
| bigovenPassword    | String     | Password of user.
| reviewId           | String     | Review identifier.
| reviewStarRating   | String     | Review star rating.
| reviewMakeAgain    | String     | Review make again.
| reviewComment      | String     | Review comment.
| reviewActiveMinutes| String     | Review active minutes.
| reviewTotalMinutes | String     | Review total minutes.

## BigOven.getReviewReplies
Get a paged list of replies for a given review.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| reviewId       | String     | Review identifier.
| pageNumber     | Number     | The page (int), starting with 1.
| resultsPerPage | Number     | Results per page (int).

## BigOven.addReplyToReview
POST a reply to a given review. The date will be set by server. Note that replies no longer have star ratings, only top-level reviews do.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| reviewId       | String     | Review identifier.
| data           | String     | Review data.

## BigOven.createRecipeScan
POST an image as a new RecipeScan.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| test           | Boolean    | Test.
| devicetype     | String     | Scan device type.
| scanLatitude   | Number     | Scan position latitude.
| scanLongitude  | Number     | Scan position longitude.

## BigOven.deleteMySingleRecipe
Delete user single recipe.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | Recipe identifier for delete.

## BigOven.getMySingleRecipe
Get user single recipe.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The Recipe ID to retrieve.
| prefetch       | Boolean    | Prefetch (Boolean).

## BigOven.createRecipeFeedback
Feedback on a Recipe -- for internal BigOven editors.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| data           | String     | The payload for feedback, which includes the field "feedback".

## BigOven.addRecipeImage
Add recipe image.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| image          | File       | Image to adding.
| caption        | String     | Image caption.
| imageLatitude  | Number     | Image position latitude.
| imageLongitude | Number     | Image position longitude.

## BigOven.createRecipeNote
Create a new note into the system.

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Your API Key.
| bigovenUsername     | String     | Username of user.
| bigovenPassword     | String     | Password of user.
| recipeId            | Number     | The recipe identifier (int).
| recipeNote          | String     | The recipe note.
| recipeNotePeople    | String     | Recipe note people.
| recipeNoteVariations| String     | Recipe note variations.
| recipeNoteUserID    | Number     | Recipe note UserID.
| recipeNoteGUID      | String     | Recipe note grocery list item id.

## BigOven.deleteRecipeNote
Delete recipe note.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| noteId         | Number     | The note identifier (int).

## BigOven.getMySingleRecipeNote
GET /recipe/{recipeId}/note/{noteId} 

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| noteId         | Number     | The note ID (note -- it's not the RecipeID).

## BigOven.updateRecipeNote
Update a Recipe note (RecipeNote).

| Field               | Type       | Description
|---------------------|------------|----------
| apiKey              | credentials| Your API Key.
| bigovenUsername     | String     | Username of user.
| bigovenPassword     | String     | Password of user.
| recipeId            | Number     | The recipe identifier (int).
| noteId              | Number     | The note identifier (int).
| recipeNoteNotes     | String     | Recipe note data.
| recipeNotePeople    | String     | Recipe note people.
| recipeNoteVariations| String     | Recipe note variations.
| recipeNoteUserID    | String     | Recipe note UserID.
| recipeNoteGUID      | String     | Recipe note grocery list item id.

## BigOven.getRecipeNotes
Get recipe notes.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| pageNumber     | Number     | The page (int), starting with 1.

## BigOven.getRecipePhotos
Get all the photos for a recipe

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| pageNumber     | Number     | The page (int), starting with 1.

## BigOven.getRelatedRecipes
Get recipes related to the given recipeId.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| pageNumber     | Number     | The page (int), starting with 1.
| resultsPerPage | Number     | Results per page (int).

## BigOven.getMyRecipeReview
Get *my* review for the recipe {recipeId}, where "me" is determined by standard authentication headers

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).

## BigOven.createReview
Add a new review. Only one review can be provided per {userId, recipeId} pair. Otherwise your review will be updated.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| comment        | String     | Review data.
| starRating     | String     | Review Star rating.
| makeAgain      | String     | Review make again
| activeMinutes  | String     | Review active minutes.
| totalMinutes   | String     | Review total minutes.

## BigOven.getRecipeReviews
Get paged list of reviews for a recipe. Each review will have at most one FeaturedReply, as well as a ReplyCount.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).
| pageNumber     | Number     | The page (int), starting with 1.
| resultsPerPage | Number     | Results per page (int).

## BigOven.getRecipeScanImages
Gets a list of RecipeScan images for the recipe. There will be at most 3 per recipe.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| recipeId       | Number     | The recipe identifier (int).

## BigOven.searchRecipes
Search for recipes. There are many parameters that you can apply.

| Field                  | Type       | Description
|------------------------|------------|----------
| apiKey                 | credentials| Your API Key.
| bigovenUsername        | String     | Username of user.
| bigovenPassword        | String     | Password of user.
| searchAnywhereByKeyword| String     | Search anywhere in the recipe for the keyword.
| folder                 | String     | Search in a specific folder name for the authenticated user.
| collectionId           | Number     | Limit to a collection ID number.
| filter                 | String     | Optionally set to either "myrecipes", "try", "favorites","added" to filter to just the authenticated user's recipe set.
| searchInTitleByKeyword | String     | Search just in the recipe title for the keyword.
| userId                 | Number     | Set the target userid to search their public recipes.
| username               | String     | Set the target username to search their public recipes.
| token                  | String     | Token.
| photos                 | Boolean    | If set to true, limit search results to photos only.
| boostmine              | Boolean    | If set to true, boost my own recipes in my folders so they show up high in the list (at the expense of other sort orders).
| includeCategoryId      | String     | Integer of the subcategory you'd like to limit searches to (see the /recipe/categories endpoint for available id numbers). For instance, 58 is "Main Dish > Casseroles".
| excludeCategoryId      | String     | Like include_cat, set this to an integer to exclude a specific category.
| includePrimaryCat      | String     | Csv indicating up to three top-level categories -- valid values are [appetizers,bread,breakfast,desserts,drinks,maindish,salads,sidedish,soups,marinades,other].
| includeIngredients     | String     | A CSV representing up to 3 ingredients to include, e.g., tomatoes,corn%20%starch,chicken.
| excludeIngredients     | String     | A CSV representing up to 3 ingredients to exclude  (Powersearch-capable plan required).
| cuisine                | String     | Limit to a specific cuisine. Cooks can enter anything free-form, but the few dozen preconfigured values are Afghan,African,American,American-South,Asian,Australian,Brazilian,Cajun,Canadian,Caribbean,Chinese,Croatian,Cuban,Dessert,Eastern European,English,French,German,Greek,Hawaiian,Hungarian,India,Indian,Irish,Italian,Japanese,Jewish,Korean,Latin,Mediterranean,Mexican,Middle Eastern,Moroccan,Polish,Russian,Scandanavian,Seafood,Southern,Southwestern,Spanish,Tex-Mex,Thai,Vegan,Vegetarian,Vietnamese.
| db                     | String     | DB.
| userset                | String     | If set to a given username, it'll force the search to filter to just that username.
| resultsPerPage         | Number     | Results per page (int).
| pageNumber             | Number     | The page (int), starting with 1.
| vegetarian             | Number     | When set to 1, limit to vegetarian (Powersearch-capable plan required).
| vegan                  | Number     | When set to 1, limit to vegan (Powersearch-capable plan required).
| containsCheese         | Number     | When set to 1, limit to contains-cheese (Powersearch-capable plan required).
| glutenFree             | Number     | When set to 1, limit to gluten-free (Powersearch-capable plan required).
| nutFree                | Number     | When set to 1, limit to nut-free (Powersearch-capable plan required).
| dairyFree              | Number     | When set to 1, limit to dairy-free (Powersearch-capable plan required).
| seaFoodFree            | Number     | When set to 1, limit to seafood-free (Powersearch-capable plan required).
| shellfishFree          | Number     | When set to 1, limit to shellfish-free (Powersearch-capable plan required).
| treeNutFree            | Number     | When set to 1, limit to tree-nut free (Powersearch-capable plan required).
| whiteMeatFree          | Number     | When set to 1, limit to white-meat free (Powersearch-capable plan required).
| redMeatFree            | Number     | When set to 1, limit to red-meat free (Powersearch-capable plan required).
| containsPasta          | Number     | When set to 1, recipe contains pasta, set to 0 means contains no pasta (Powersearch-capable plan required).

## BigOven.getRandomRecipe
Get a random, home-page-quality Recipe.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.

## BigOven.getRecipeRaves
Get the recipe/comment tuples for those recipes with 4 or 5 star ratings.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| pageNumber     | Number     | The page (int), starting with 1.
| resultsPerPage | Number     | Results per page (int).

## BigOven.getUserRecentlyViewedRecipes
Get a list of recipes that the authenticated user has most recently viewed.

| Field          | Type       | Description
|----------------|------------|----------
| apiKey         | credentials| Your API Key.
| bigovenUsername| String     | Username of user.
| bigovenPassword| String     | Password of user.
| pageNumber     | Number     | The page (int), starting with 1.
| resultsPerPage | Number     | Results per page (int).

