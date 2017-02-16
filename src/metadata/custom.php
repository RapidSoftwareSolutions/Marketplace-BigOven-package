<?php 
return array (
    'getSingleRecipeCollection' => array (
        'dictionary' => array (
            'collectionId' => 'id',
            'resultsPerPage' => 'rpp',
            'pageNumber' => 'pg',
            'test' => 'test',
            'sessionForLogging' => 'sessionForLogging',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/collection/{{collectionId}}',
        'method' => 'GET',
    ),
    'getRecipeCollectionMetadata' => array (
        'dictionary' => array (
            'collectionId' => 'id',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/collection/{{collectionId}}/meta',
        'method' => 'GET',
    ),
    'getRecipeCollections' => array (
        'dictionary' => array (
            'test' => 'test',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/collections',
        'method' => 'GET',
    ),
    'getFoodGlossaryArticleByTerm' => array (
        'dictionary' => array (
            'term' => 'term',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/glossary/byterm/{{term}}',
        'method' => 'GET',
    ),
    'getFoodGlossaryArticle' => array (
        'dictionary' => array (
            'articleId' => 'id',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/glossary/{{articleId}}',
        'method' => 'GET',
    ),
    'deleteItemsFromGroceryList' => array (
        'dictionary' => array (
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist',
        'method' => 'DELETE',
    ),
    'getMyGroceryList' => array (
        'dictionary' => array (
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist',
        'method' => 'GET',
    ),
    'departmentalizeItemsInGroceryList' => array (
        'dictionary' => array (
            'model' => 'items',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/department',
        'method' => 'POST',
    ),
    'addSingleItemToGroceryList' => array (
        'dictionary' => array (
            'newItemName' => 'newItem_name',
            'newItemQuantity' => 'newItem_quantity',
            'newItemUnit' => 'newItem_unit',
            'newItemNotes' => 'newItem_notes',
            'newItemDepartment' => 'newItem_department',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item',
        'method' => 'POST',
        'custom' => true,
    ),
    'deleteItemFromGroceryList' => array (
        'dictionary' => array (
            'GUID' => 'guid',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item/{{guid}}',
        'method' => 'DELETE',
    ),
    'updateGroceryItem' => array (
        'dictionary' => array (
            'requisiteName' => 'req_name',
            'requisiteQuantity' => 'req_quantity',
            'requisiteUnit' => 'req_unit',
            'requisiteNotes' => 'req_notes',
            'requisiteDepartment' => 'req_department',
            'GUID' => 'guid',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item/{{guid}}',
        'method' => 'PUT',
        'custom' => true,
    ),
    'addRecipeToGroceryList' => array (
        'dictionary' => array (
            'recipeId' => 'data_RecipeId',
            'scale' => 'data_scale',
            'markAsPending' => 'data_markAsPending',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/recipe',
        'method' => 'POST',
        'custom' => true,
    ),
    'synchronizeGroceryList' => array (
        'dictionary' => array (
            'requisiteItems' => 'req_list_Items',
            'requisiteRecipes' => 'req_list_Recipes',
            'since' => 'since',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/grocerylist/sync',
        'method' => 'POST',
        'custom' => true,
    ),
    /*
            'createRecipe' => array (
                'dictionary' => array (
                    'recipe' => 'recipe',
                ),
                'vendorUrl' => 'http://api2.bigoven.com/recipe',
                'method' => 'POST',
            ),
            'updateRecipe' => array (
                'dictionary' => array (
                    'recipe' => 'recipe',
                ),
                'vendorUrl' => 'http://api2.bigoven.com/recipe',
                'method' => 'PUT',
            ),
    */
    'getRecipeAutocomplete' => array (
        'dictionary' => array (
            'query' => 'query',
            'limit' => 'limit',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/autocomplete',
        'method' => 'GET',
    ),
    'getRecipeCategories' => array (
        'dictionary' => array (
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/categories',
        'method' => 'GET',
    ),
    'deleteMyReviewReply' => array (
        'dictionary' => array (
            'replyId' => 'replyId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/replies/{{replyId}}',
        'method' => 'DELETE',
    ),
    'updateMyReviewReply' => array (
        'dictionary' => array (
            'replyId' => 'replyId',
            'data' => 'Comment',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/replies/{{replyId}}',
        'method' => 'PUT',
    ),
    'getSingleReview' => array (
        'dictionary' => array (
            'reviewId' => 'reviewId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}',
        'method' => 'GET',
    ),
    'updateReview' => array (
        'dictionary' => array (
            'reviewId' => 'reviewId',
            'reviewStarRating' => 'review_StarRating',
            'reviewMakeAgain' => 'review_MakeAgain',
            'reviewComment' => 'review_Comment',
            'reviewActiveMinutes' => 'review_ActiveMinutes',
            'reviewTotalMinutes' => 'review_TotalMinutes',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}',
        'method' => 'PUT',
        'custom' => true,
    ),
    'getReviewReplies' => array (
        'dictionary' => array (
            'reviewId' => 'reviewId',
            'pageNumber' => 'pg',
            'resultsPerPage' => 'rpp',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}/replies',
        'method' => 'GET',
    ),
    'addReplyToReview' => array (
        'dictionary' => array (
            'reviewId' => 'reviewId',
            'data' => 'Comment',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}/replies',
        'method' => 'POST',
    ),
    'createRecipeScan' => array (
        'dictionary' => array (
            'test' => 'test',
            'devicetype' => 'devicetype',
            'scanLatitude' => 'lat',
            'scanLongitude' => 'lng',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/scan',
        'method' => 'POST-GET',
    ),
    'deleteMySingleRecipe' => array (
        'dictionary' => array (
            'recipeId' => 'id',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}',
        'method' => 'DELETE',
    ),
    'getMySingleRecipe' => array (
        'dictionary' => array (
            'recipeId' => 'id',
            'prefetch' => 'prefetch',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}',
        'method' => 'GET',
    ),
    'createRecipeFeedback' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'data' => 'feedback',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/feedback',
        'method' => 'POST',
    ),
    'addRecipeImage' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'caption' => 'caption',
            'imageLatitude' => 'lat',
            'imageLongitude' => 'lng',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/image',
        'method' => 'POST-GET',
    ),
    'createRecipeNote' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId', // -> recipeNote_RecipeID
            'recipeNote' => 'recipeNote_Notes',
            'recipeNotePeople' => 'recipeNote_People',
            'recipeNoteVariations' => 'recipeNote_Variations',
            'recipeNoteUserID' => 'recipeNote_UserID',
            'recipeNoteGUID' => 'recipeNote_GUID',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note',
        'method' => 'POST',
        'custom' => true,
    ),
    'deleteRecipeNote' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'noteId' => 'noteId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note/{{noteId}}',
        'method' => 'DELETE',
    ),
    'getMySingleRecipeNote' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'noteId' => 'noteId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note/{{noteId}}',
        'method' => 'GET',
    ),
    'updateRecipeNote' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId', // -> recipeNote_RecipeID
            'noteId' => 'noteId', // -> recipeNote_ID
            'recipeNoteNotes' => 'recipeNote_Notes',
            'recipeNotePeople' => 'recipeNote_People',
            'recipeNoteVariations' => 'recipeNote_Variations',
            'recipeNoteUserID' => 'recipeNote_UserID',
            'recipeNoteGUID' => 'recipeNote_GUID',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note/{{noteId}}',
        'method' => 'PUT',
        'custom' => true,
    ),
    'getRecipeNotes' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'pageNumber' => 'pg',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/notes',
        'method' => 'GET',
        'custom' => true, // duplicate recipeId to rpp
    ),
    'getRecipePhotos' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'pageNumber' => 'pg',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/photos',
        'method' => 'GET',
        'custom' => true, // duplicate recipeId to rpp
    ),
    'getRelatedRecipes' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'pageNumber' => 'pg',
            'resultsPerPage' => 'rpp',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/related',
        'method' => 'GET',
    ),
    'getMyRecipeReview' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/review',
        'method' => 'GET',
    ),
    'createReview' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'StarRating' => 'data_StarRating',
            'MakeAgain' => 'data_MakeAgain',
            'Comment' => 'data_Comment',
            'ActiveMinutes' => 'data_ActiveMinutes',
            'TotalMinutes' => 'data_TotalMinutes',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/review',
        'method' => 'POST',
        'custom' => true,
    ),
    'getRecipeReviews' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
            'pageNumber' => 'pg',
            'resultsPerPage' => 'rpp',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/reviews',
        'method' => 'GET',
    ),
    'getRecipeScanImages' => array (
        'dictionary' => array (
            'recipeId' => 'recipeId',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/scans',
        'method' => 'GET',
    ),
    'searchRecipes' => array (
        'dictionary' => array (
            'searchAnywhereByKeyword' => 'any_kw',
            'folder' => 'folder',
            'collectionId' => 'coll',
            'filter' => 'filter',
            'searchInTitleByKeyword' => 'title_kw',
            'userId' => 'userId',
            'username' => 'username',
            'token' => 'token',
            'photos' => 'photos',
            'boostmine' => 'boostmine',
            'includeCategoryId' => 'include_cat',
            'excludeCategoryId' => 'exclude_cat',
            'includePrimaryCat' => 'include_primarycat',
            'includeIngredients' => 'include_ing',
            'excludeIngredients' => 'exclude_ing',
            'cuisine' => 'cuisine',
            'db' => 'db',
            'userset' => 'userset',
            'resultsPerPage' => 'rpp',
            'pageNumber' => 'pg',
            'vegetarian' => 'vtn',
            'vegan' => 'vgn',
            'containsCheese' => 'chs',
            'glutenFree' => 'glf',
            'nutFree' => 'ntf',
            'dairyFree' => 'dyf',
            'seaFoodFree' => 'sff',
            'shellfishFree' => 'slf',
            'treeNutFree' => 'tnf',
            'whiteMeatFree' => 'wmf',
            'redMeatFree' => 'rmf',
            'containsPasta' => 'cps',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipes',
        'method' => 'GET',
    ),
    'getRandomRecipe' => array (
        'dictionary' => array (
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipes/random',
        'method' => 'GET',
    ),
    'getRecipeRaves' => array (
        'dictionary' => array (
            'pageNumber' => 'pg',
            'resultsPerPage' => 'rpp',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipes/raves',
        'method' => 'GET',
    ),
    'getUserRecentlyViewedRecipes' => array (
        'dictionary' => array (
            'pageNumber' => 'pg',
            'resultsPerPage' => 'rpp',
        ),
        'vendorUrl' => 'http://api2.bigoven.com/recipes/recentviews',
        'method' => 'GET',
    ),
);