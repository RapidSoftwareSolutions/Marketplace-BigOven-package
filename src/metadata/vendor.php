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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'id',
                    'type' => 'Number',
                    'info' => 'the collection identifier',
                    'required' => true,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'results per page',
                    'required' => false,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'page number (starting with 1)',
                    'required' => false,
                ),
                array (
                    'name' => 'test',
                    'type' => 'Boolean',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'sessionForLogging',
                    'type' => 'String',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'id',
                    'type' => 'Number',
                    'info' => 'the collection identifier',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'Keyword used to look up article, e.g., asparagus',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'id',
                    'type' => 'Number',
                    'info' => 'identifier of article to retrieve',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'name, quantity, unit, notes, department',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'guid',
                    'type' => 'String',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'req',
                    'type' => 'String',
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'guid',
                    'type' => 'String',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'req',
                    'type' => 'String',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'review',
                    'type' => 'String',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'the page (int), starting with 1',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'results per page (int)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'devicetype',
                    'type' => 'String',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'lat',
                    'type' => 'Number',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'lng',
                    'type' => 'Number',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'id',
                    'type' => 'Number',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'id',
                    'type' => 'Number',
                    'info' => 'the Recipe ID to retrieve',
                    'required' => true,
                ),
                array (
                    'name' => 'prefetch',
                    'type' => 'Boolean',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => 'The payload for feedback, which includes the field "feedback"',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
                    'required' => true,
                ),
                array (
                    'name' => 'caption',
                    'type' => 'String',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'lat',
                    'type' => 'Number',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'lng',
                    'type' => 'Number',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'recipeId (int)',
                    'required' => true,
                ),
                array (
                    'name' => 'note',
                    'type' => 'String',
                    'info' => 'a recipe note, with fields: Date (YYYY-MM-DD string), Notes (string), People (string), Variations (string), RecipeID (int?)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'recipeId (int)',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'noteId (int)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'recipe identifier (integer)',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'The note ID (note -- it\'s not the RecipeID)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
                    'required' => true,
                ),
                array (
                    'name' => 'noteId',
                    'type' => 'Number',
                    'info' => 'description',
                    'required' => true,
                ),
                array (
                    'name' => 'recipeNote',
                    'type' => 'String',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'recipeId (int)',
                    'required' => true,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'page (int, starting from 1)',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'recipeId',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'Recipe ID (required)',
                    'required' => true,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'description',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'description',
                    'required' => true,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => '',
                    'required' => true,
                ),
                array (
                    'name' => 'data',
                    'type' => 'String',
                    'info' => '',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'recipe id (int)',
                    'required' => true,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'the page (int), starting with 1',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'results per page (int)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'info' => 'the recipe identifier (int)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'any_kw',
                    'type' => 'String',
                    'info' => 'Search anywhere in the recipe for the keyword',
                    'required' => false,
                ),
                array (
                    'name' => 'folder',
                    'type' => 'String',
                    'info' => 'Search in a specific folder name for the authenticated user',
                    'required' => false,
                ),
                array (
                    'name' => 'coll',
                    'type' => 'Number',
                    'info' => 'Limit to a collection ID number',
                    'required' => false,
                ),
                array (
                    'name' => 'filter',
                    'type' => 'String',
                    'info' => 'optionally set to either "myrecipes", "try", "favorites","added" to filter to just the authenticated user\'s recipe set',
                    'required' => false,
                ),
                array (
                    'name' => 'title_kw',
                    'type' => 'String',
                    'info' => 'Search just in the recipe title for the keyword',
                    'required' => false,
                ),
                array (
                    'name' => 'userId',
                    'type' => 'Number',
                    'info' => 'Set the target userid to search their public recipes',
                    'required' => false,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Set the target username to search their public recipes',
                    'required' => false,
                ),
                array (
                    'name' => 'token',
                    'type' => 'String',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'photos',
                    'type' => 'Boolean',
                    'info' => 'if set to true, limit search results to photos only',
                    'required' => false,
                ),
                array (
                    'name' => 'boostmine',
                    'type' => 'Boolean',
                    'info' => 'if set to true, boost my own recipes in my folders so they show up high in the list (at the expense of other sort orders)',
                    'required' => false,
                ),
                array (
                    'name' => 'include_cat',
                    'type' => 'String',
                    'info' => 'integer of the subcategory you\'d like to limit searches to (see the /recipe/categories endpoint for available id numbers). For instance, 58 is "Main Dish > Casseroles".',
                    'required' => false,
                ),
                array (
                    'name' => 'exclude_cat',
                    'type' => 'String',
                    'info' => 'like include_cat, set this to an integer to exclude a specific category',
                    'required' => false,
                ),
                array (
                    'name' => 'includePrimarycat',
                    'type' => 'String',
                    'info' => 'csv indicating up to three top-level categories -- valid values are [appetizers,bread,breakfast,desserts,drinks,maindish,salads,sidedish,soups,marinades,other]',
                    'required' => false,
                ),
                array (
                    'name' => 'include_ing',
                    'type' => 'String',
                    'info' => 'A CSV representing up to 3 ingredients to include, e.g., tomatoes,corn%20%starch,chicken',
                    'required' => false,
                ),
                array (
                    'name' => 'exclude_ing',
                    'type' => 'String',
                    'info' => 'A CSV representing up to 3 ingredients to exclude  (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'cuisine',
                    'type' => 'String',
                    'info' => 'Limit to a specific cuisine. Cooks can enter anything free-form, but the few dozen preconfigured values are Afghan,African,American,American-South,Asian,Australian,Brazilian,Cajun,Canadian,Caribbean,Chinese,Croatian,Cuban,Dessert,Eastern European,English,French,German,Greek,Hawaiian,Hungarian,India,Indian,Irish,Italian,Japanese,Jewish,Korean,Latin,Mediterranean,Mexican,Middle Eastern,Moroccan,Polish,Russian,Scandanavian,Seafood,Southern,Southwestern,Spanish,Tex-Mex,Thai,Vegan,Vegetarian,Vietnamese',
                    'required' => false,
                ),
                array (
                    'name' => 'db',
                    'type' => 'String',
                    'info' => 'description',
                    'required' => false,
                ),
                array (
                    'name' => 'userset',
                    'type' => 'String',
                    'info' => 'If set to a given username, it\'ll force the search to filter to just that username',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'integer; results per page',
                    'required' => false,
                ),
                array (
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'integer: the page number',
                    'required' => false,
                ),
                array (
                    'name' => 'vtn',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to vegetarian (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'vgn',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to vegan (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'chs',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to contains-cheese (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'glf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to gluten-free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'ntf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to nut-free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'dyf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to dairy-free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'sff',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to seafood-free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'slf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to shellfish-free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'tnf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to tree-nut free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'wmf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to white-meat free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'rmf',
                    'type' => 'Number',
                    'info' => 'when set to 1, limit to red-meat free (Powersearch-capable plan required)',
                    'required' => false,
                ),
                array (
                    'name' => 'cps',
                    'type' => 'Number',
                    'info' => 'when set to 1, recipe contains pasta, set to 0 means contains no pasta (Powersearch-capable plan required)',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'page, starting with 1',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'results per page',
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
            'description' => 'description',
            'args' => array (
                array (
                    'name' => 'apiKey',
                    'type' => 'credentials',
                    'info' => 'Your API Key',
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
                    'name' => 'pg',
                    'type' => 'Number',
                    'info' => 'Page number starting with 1',
                    'required' => false,
                ),
                array (
                    'name' => 'rpp',
                    'type' => 'Number',
                    'info' => 'results per page',
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
                'id' => 'id',
                'rpp' => 'rpp',
                'pg' => 'pg',
                'test' => 'test',
                'sessionForLogging' => 'sessionForLogging',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/collection/{{id}}',
            'method' => 'GET',
        ),
        'getRecipeCollectionMetadata' => array (
            'dictionary' => array (
                'id' => 'id',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/collection/{{id}}/meta',
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
                'id' => 'id',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/glossary/{{id}}',
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
                'model' => 'model',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/department',
            'method' => 'POST',
        ),
        'addSingleItemToGroceryList' => array (
            'dictionary' => array (
                'newItem' => 'newItem',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item',
            'method' => 'POST',
        ),
        'deleteItemFromGroceryList' => array (
            'dictionary' => array (
                'guid' => 'guid',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item/{{guid}}',
            'method' => 'DELETE',
        ),
        'updateGroceryItem' => array (
            'dictionary' => array (
                'req' => 'req',
                'guid' => 'guid',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/item/{{guid}}',
            'method' => 'PUT',
        ),
        'addRecipeToGroceryList' => array (
            'dictionary' => array (
                'data' => 'data',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/recipe',
            'method' => 'POST',
        ),
        'synchronizeGroceryList' => array (
            'dictionary' => array (
                'req' => 'req',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/grocerylist/sync',
            'method' => 'POST',
        ),
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
                'data' => 'data',
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
                'review' => 'review',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}',
            'method' => 'PUT',
        ),
        'getReviewReplies' => array (
            'dictionary' => array (
                'reviewId' => 'reviewId',
                'pg' => 'pg',
                'rpp' => 'rpp',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}/replies',
            'method' => 'GET',
        ),
        'addReplyToReview' => array (
            'dictionary' => array (
                'reviewId' => 'reviewId',
                'data' => 'data',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/review/{{reviewId}}/replies',
            'method' => 'POST',
        ),
        'createRecipeScan' => array (
            'dictionary' => array (
                'test' => 'test',
                'devicetype' => 'devicetype',
                'lat' => 'lat',
                'lng' => 'lng',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/scan',
            'method' => 'POST',
        ),
        'deleteMySingleRecipe' => array (
            'dictionary' => array (
                'id' => 'id',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{id}}',
            'method' => 'DELETE',
        ),
        'getMySingleRecipe' => array (
            'dictionary' => array (
                'id' => 'id',
                'prefetch' => 'prefetch',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{id}}',
            'method' => 'GET',
        ),
        'createRecipeFeedback' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'data' => 'data',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/feedback',
            'method' => 'POST',
        ),
        'addRecipeImage' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'caption' => 'caption',
                'lat' => 'lat',
                'lng' => 'lng',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/image',
            'method' => 'POST',
        ),
        'createRecipeNote' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'note' => 'note',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note',
            'method' => 'POST',
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
                'recipeId' => 'recipeId',
                'noteId' => 'noteId',
                'recipeNote' => 'recipeNote',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/note/{{noteId}}',
            'method' => 'PUT',
        ),
        'getRecipeNotes' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'pg' => 'pg',
                'rpp' => 'rpp',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/notes',
            'method' => 'GET',
        ),
        'getRecipePhotos' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'pg' => 'pg',
                'rpp' => 'rpp',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/photos',
            'method' => 'GET',
        ),
        'getRelatedRecipes' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'pg' => 'pg',
                'rpp' => 'rpp',
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
                'data' => 'data',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipe/{{recipeId}}/review',
            'method' => 'POST',
        ),
        'getRecipeReviews' => array (
            'dictionary' => array (
                'recipeId' => 'recipeId',
                'pg' => 'pg',
                'rpp' => 'rpp',
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
                'any_kw' => 'any_kw',
                'folder' => 'folder',
                'coll' => 'coll',
                'filter' => 'filter',
                'title_kw' => 'title_kw',
                'userId' => 'userId',
                'username' => 'username',
                'token' => 'token',
                'photos' => 'photos',
                'boostmine' => 'boostmine',
                'include_cat' => 'include_cat',
                'exclude_cat' => 'exclude_cat',
                'includePrimarycat' => 'include_primarycat',
                'include_ing' => 'include_ing',
                'exclude_ing' => 'exclude_ing',
                'cuisine' => 'cuisine',
                'db' => 'db',
                'userset' => 'userset',
                'rpp' => 'rpp',
                'pg' => 'pg',
                'vtn' => 'vtn',
                'vgn' => 'vgn',
                'chs' => 'chs',
                'glf' => 'glf',
                'ntf' => 'ntf',
                'dyf' => 'dyf',
                'sff' => 'sff',
                'slf' => 'slf',
                'tnf' => 'tnf',
                'wmf' => 'wmf',
                'rmf' => 'rmf',
                'cps' => 'cps',
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
                'pg' => 'pg',
                'rpp' => 'rpp',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipes/raves',
            'method' => 'GET',
        ),
        'getUserRecentlyViewedRecipes' => array (
            'dictionary' => array (
                'pg' => 'pg',
                'rpp' => 'rpp',
            ),
            'vendorUrl' => 'http://api2.bigoven.com/recipes/recentviews',
            'method' => 'GET',
        ),
    ),
);