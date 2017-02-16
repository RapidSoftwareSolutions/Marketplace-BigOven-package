<?php
return array (
    'package' => 'BigOven',
    'tagline' => 'The best recipe organizer, grocery list and menu app for home cooks.',
    'description' => 'With BigOven, you can take your recipes anywhere, make grocery lists and easily share your favorite creations with your friends, family or even your future self when you need them.',
    'image' => 'https://logo.clearbit.com/bigoven.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-BigOven-package',
    'keywords' => array ('API', 'recipe', 'cooking', 'BigOven'),
    'accounts' => array (
        'domain' => 'bigoven.com',
        'credentials' => array ('apiKey', 'credentialsUsername', 'credentialsPassword'),
    ),
    'blocks' => array (
        array (
            'name' => 'getSingleRecipeCollection',
            'description' => 'Gets a recipe collection. A recipe collection is a curated set of recipes.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'collectionId',
                    'type' => 'Number',
                    'info' => 'The collection identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'test',
                    'type' => 'Boolean',
                    'info' => 'Test (Boolean).',
                    'required' => false,
                ),
                array (
                    'name' => 'sessionForLogging',
                    'type' => 'String',
                    'info' => 'Session for logging.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeCollectionMetadata',
            'description' => 'Gets a recipe collection metadata. A recipe collection is a curated set of recipes.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'collectionId',
                    'type' => 'Number',
                    'info' => 'The collection identifier.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeCollections',
            'description' => 'Get the list of current, seasonal recipe collections. From here, you can use the /collection/{id} endpoint to retrieve the recipes in those collections.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'test',
                    'type' => 'String',
                    'info' => 'Test.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getFoodGlossaryArticleByTerm',
            'description' => 'Get food glossary article by term (e.g., asparagus). This editorial is (c) BigOven and MUST carry attribution and a link back to the glossary entry on BigOven.com.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'term',
                    'type' => 'String',
                    'info' => 'Keyword used to look up article, e.g., asparagus.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getFoodGlossaryArticle',
            'description' => 'Get food glossary article.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'articleId',
                    'type' => 'Number',
                    'info' => 'Identifier of article to retrieve.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteItemsFromGroceryList',
            'description' => 'Delete all the items on a grocery list; faster operation than a sync with deleted items.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyGroceryList',
            'description' => 'Get the user\'s grocery list. User is determined by Basic Authentication.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'departmentalizeItemsInGroceryList',
            'description' => 'Departmentalize a list of strings. Used for ad-hoc grocery list item addition.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'model',
                    'type' => 'String',
                    'info' => 'Items list.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addSingleItemToGroceryList',
            'description' => 'Add a single line item to the grocery list.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'newItem',
                    'type' => 'String',
                    'info' => 'One of: name, quantity, unit, notes, department.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteItemFromGroceryList',
            'description' => 'Will delete this item assuming you own it.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'GUID',
                    'type' => 'String',
                    'info' => 'Grocery list item id (GUID).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'updateGroceryItem',
            'description' => 'Update a grocery item by GUID',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'requisite',
                    'type' => 'JSON',
                    'info' => 'Grocery item requisite.',
                    'required' => true,
                ),
                array (
                    'name' => 'GUID',
                    'type' => 'String',
                    'info' => 'Grocery list item id (GUID).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addRecipeToGroceryList',
            'description' => 'Add a Recipe to the grocery list.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'In the request data, pass in recipeId, scale (scale=1.0 says to keep the recipe the same size as originally posted), markAsPending (true/false) to indicate that the lines in the recipe should be marked in a "pending" (unconfirmed by user) state.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'synchronizeGroceryList',
            'description' => 'Synchronize the grocery list.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'requisite',
                    'type' => 'String',
                    'info' => 'Grocery list requisite.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createRecipe',
            'description' => 'Add a new recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipe',
                    'type' => 'String',
                    'info' => 'Recipe requisites.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'updateRecipe',
            'description' => 'Update a recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipe',
                    'type' => 'String',
                    'info' => 'Recipe requisites.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeAutocomplete',
            'description' => 'Given a query, return recipe titles starting with query. Query must be at least 3 chars in length.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'query',
                    'type' => 'String',
                    'info' => 'Query for search.',
                    'required' => true,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Search result limit.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeCategories',
            'description' => 'Get a list of recipe categories.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteMyReviewReply',
            'description' => 'DELETE a reply to a given review. Authenticated user must be the one who originally posted the reply.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'replyId',
                    'type' => 'String',
                    'info' => 'Review reply identifier.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'updateMyReviewReply',
            'description' => 'Update (PUT) a reply to a given review. Authenticated user must be the original one that posted the reply.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'replyId',
                    'type' => 'String',
                    'info' => 'Review reply identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'Review reply data.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSingleReview',
            'description' => 'Get a given review by string-style ID. This will return a payload with FeaturedReply, ReplyCount. Recommended display is to list top-level reviews with one featured reply underneath. Currently, the FeaturedReply is the most recent one for that rating.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'reviewId',
                    'type' => 'String',
                    'info' => 'Review identifier.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'updateReview',
            'description' => 'Update a given top-level review.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'reviewId',
                    'type' => 'String',
                    'info' => 'Review identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'review',
                    'type' => 'String',
                    'info' => 'Review requisite.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getReviewReplies',
            'description' => 'Get a paged list of replies for a given review.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'reviewId',
                    'type' => 'String',
                    'info' => 'Review identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addReplyToReview',
            'description' => 'POST a reply to a given review. The date will be set by server. Note that replies no longer have star ratings, only top-level reviews do.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'reviewId',
                    'type' => 'String',
                    'info' => 'Review identifier.',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'Review data.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createRecipeScan',
            'description' => 'POST an image as a new RecipeScan.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'test',
                    'type' => 'Boolean',
                    'info' => 'Test.',
                    'required' => false,
                ),
                array (
                    'name' => 'devicetype',
                    'type' => 'String',
                    'info' => 'Scan device type.',
                    'required' => false,
                ),
                array (
                    'name' => 'scanLatitude',
                    'type' => 'Number',
                    'info' => 'Scan position latitude.',
                    'required' => false,
                ),
                array (
                    'name' => 'scanLongitude',
                    'type' => 'Number',
                    'info' => 'Scan position longitude.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteMySingleRecipe',
            'description' => 'Delete user single recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'Recipe identifier for delete.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMySingleRecipe',
            'description' => 'Get user single recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'RecipeId',
                    'type' => 'Number',
                    'info' => 'The Recipe ID to retrieve.',
                    'required' => true,
                ),
                array (
                    'name' => 'prefetch',
                    'type' => 'Boolean',
                    'info' => 'Prefetch (Boolean).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createRecipeFeedback',
            'description' => 'Feedback on a Recipe -- for internal BigOven editors.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'The payload for feedback, which includes the field "feedback".',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addRecipeImage',
            'description' => 'Add recipe image.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'image',
                    'type' => 'File',
                    'info' => 'Image to adding.',
                    'required' => false,
                ),
                array (
                    'name' => 'caption',
                    'type' => 'String',
                    'info' => 'Image caption.',
                    'required' => false,
                ),
                array (
                    'name' => 'imageLatitude',
                    'type' => 'Number',
                    'info' => 'Image position latitude.',
                    'required' => false,
                ),
                array (
                    'name' => 'imageLongitude',
                    'type' => 'Number',
                    'info' => 'Image position longitude.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createRecipeNote',
            'description' => 'HTTP POST a new note into the system.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'note',
                    'type' => 'String',
                    'info' => 'The recipe note, with fields: Date (YYYY-MM-DD string), Notes (string), People (string), Variations (string), RecipeID (int?).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteRecipeNote',
            'description' => 'Delete recipe note.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'The note identifier (int).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMySingleRecipeNote',
            'description' => 'GET /recipe/{recipeId}/note/{noteId} ',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'The note ID (note -- it\'s not the RecipeID).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'updateRecipeNote',
            'description' => 'HTTP PUT (update) a Recipe note (RecipeNote).',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'The note identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeNote',
                    'type' => 'String',
                    'info' => 'Recipe note data.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeNotes',
            'description' => 'Get recipe notes.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipePhotos',
            'description' => 'Get all the photos for a recipe',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRelatedRecipes',
            'description' => 'Get recipes related to the given recipeId.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => true,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyRecipeReview',
            'description' => 'Get *my* review for the recipe {recipeId}, where "me" is determined by standard authentication headers',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createReview',
            'description' => 'Add a new review. Only one review can be provided per {userId, recipeId} pair. Otherwise your review will be updated.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'Review data.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeReviews',
            'description' => 'Get paged list of reviews for a recipe. Each review will have at most one FeaturedReply, as well as a ReplyCount.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeScanImages',
            'description' => 'Gets a list of RecipeScan images for the recipe. There will be at most 3 per recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeId',
                    'type' => 'Number',
                    'info' => 'The recipe identifier (int).',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'searchRecipes',
            'description' => 'Search for recipes. There are many parameters that you can apply.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'searchAnywhereByKeyword',
                    'type' => 'String',
                    'info' => 'Search anywhere in the recipe for the keyword.',
                    'required' => false,
                ),
                array (
                    'name' => 'folder',
                    'type' => 'String',
                    'info' => 'Search in a specific folder name for the authenticated user.',
                    'required' => false,
                ),
                array (
                    'name' => 'collectionId',
                    'type' => 'Number',
                    'info' => 'Limit to a collection ID number.',
                    'required' => false,
                ),
                array (
                    'name' => 'filter',
                    'type' => 'String',
                    'info' => 'Optionally set to either "myrecipes", "try", "favorites","added" to filter to just the authenticated user\'s recipe set.',
                    'required' => false,
                ),
                array (
                    'name' => 'searchInTitleByKeyword',
                    'type' => 'String',
                    'info' => 'Search just in the recipe title for the keyword.',
                    'required' => false,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'Number',
                    'info' => 'Set the target userid to search their public recipes.',
                    'required' => false,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Set the target username to search their public recipes.',
                    'required' => false,
                ),
                array (
                    'name' => 'token',
                    'type' => 'String',
                    'info' => 'Token.',
                    'required' => false,
                ),
                array (
                    'name' => 'photos',
                    'type' => 'Boolean',
                    'info' => 'If set to true, limit search results to photos only.',
                    'required' => false,
                ),
                array (
                    'name' => 'boostmine',
                    'type' => 'Boolean',
                    'info' => 'If set to true, boost my own recipes in my folders so they show up high in the list (at the expense of other sort orders).',
                    'required' => false,
                ),
                array (
                    'name' => 'includeCategoryId',
                    'type' => 'String',
                    'info' => 'Integer of the subcategory you\'d like to limit searches to (see the /recipe/categories endpoint for available id numbers). For instance, 58 is "Main Dish > Casseroles".',
                    'required' => false,
                ),
                array (
                    'name' => 'excludeCategoryId',
                    'type' => 'String',
                    'info' => 'Like include_cat, set this to an integer to exclude a specific category.',
                    'required' => false,
                ),
                array (
                    'name' => 'includePrimaryCat',
                    'type' => 'String',
                    'info' => 'Csv indicating up to three top-level categories -- valid values are [appetizers,bread,breakfast,desserts,drinks,maindish,salads,sidedish,soups,marinades,other].',
                    'required' => false,
                ),
                array (
                    'name' => 'includeIngredients',
                    'type' => 'String',
                    'info' => 'A CSV representing up to 3 ingredients to include, e.g., tomatoes,corn%20%starch,chicken.',
                    'required' => false,
                ),
                array (
                    'name' => 'excludeIngredients',
                    'type' => 'String',
                    'info' => 'A CSV representing up to 3 ingredients to exclude  (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'cuisine',
                    'type' => 'String',
                    'info' => 'Limit to a specific cuisine. Cooks can enter anything free-form, but the few dozen preconfigured values are Afghan,African,American,American-South,Asian,Australian,Brazilian,Cajun,Canadian,Caribbean,Chinese,Croatian,Cuban,Dessert,Eastern European,English,French,German,Greek,Hawaiian,Hungarian,India,Indian,Irish,Italian,Japanese,Jewish,Korean,Latin,Mediterranean,Mexican,Middle Eastern,Moroccan,Polish,Russian,Scandanavian,Seafood,Southern,Southwestern,Spanish,Tex-Mex,Thai,Vegan,Vegetarian,Vietnamese.',
                    'required' => false,
                ),
                array (
                    'name' => 'db',
                    'type' => 'String',
                    'info' => 'DB.',
                    'required' => false,
                ),
                array (
                    'name' => 'userset',
                    'type' => 'String',
                    'info' => 'If set to a given username, it\'ll force the search to filter to just that username.',
                    'required' => false,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'vegetarian',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to vegetarian (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'vegan',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to vegan (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'containsCheese',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to contains-cheese (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'glutenFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to gluten-free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'nutFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to nut-free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'dairyFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to dairy-free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'seaFoodFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to seafood-free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'shellfishFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to shellfish-free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'treeNutFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to tree-nut free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'whiteMeatFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to white-meat free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'redMeatFree',
                    'type' => 'Number',
                    'info' => 'When set to 1, limit to red-meat free (Powersearch-capable plan required).',
                    'required' => false,
                ),
                array (
                    'name' => 'containsPasta',
                    'type' => 'Number',
                    'info' => 'When set to 1, recipe contains pasta, set to 0 means contains no pasta (Powersearch-capable plan required).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRandomRecipe',
            'description' => 'Get a random, home-page-quality Recipe.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRecipeRaves',
            'description' => 'Get the recipe/comment tuples for those recipes with 4 or 5 star ratings.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserRecentlyViewedRecipes',
            'description' => 'Get a list of recipes that the authenticated user has most recently viewed.',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsUsername',
                    'type' => 'credentials',
                    'info' => 'Username of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'credentialsPassword',
                    'type' => 'credentials',
                    'info' => 'Password of user.',
                    'required' => true,
                ),
                array (
                    'name' => 'pageNumber',
                    'type' => 'Number',
                    'info' => 'The page (int), starting with 1.',
                    'required' => false,
                ),
                array (
                    'name' => 'resultsPerPage',
                    'type' => 'Number',
                    'info' => 'Results per page (int).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
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
                'requisiteListItems' => 'req_list_Items',
                'requisiteRecipes' => 'req_Recipes',
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
                'note' => 'note', // -> recipeNote_Notes
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
    ),
);