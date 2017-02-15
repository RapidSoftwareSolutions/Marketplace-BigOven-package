<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Core\Router;

//header('Content-type: application/json');
http_response_code (200);
define('RAPID_IN', TRUE);

$inPath = trim(str_replace('index.php', '', trim($_SERVER['SCRIPT_NAME'], '\/\\' )), '\/\\');
if( strlen(trim($inPath)) > 0){
    define('INDEX_PATH', '/' . $inPath . '/');
}else{
    define('INDEX_PATH', '/');
}
define('APP_PATH', __DIR__);
define('HTTP_HOST', $_SERVER['HTTP_HOST']);

$methodsList[] = ["getSingleRecipeCollection", "GET", "/collection/{id}"];
$methodsList[] = ["getRecipeCollectionMetadata", "GET", "/collection/{id}/meta"];
$methodsList[] = ["getRecipeCollections", "GET", "/collections"];
$methodsList[] = ["getFoodGlossaryArticle", "GET", "/glossary/{id}"];
$methodsList[] = ["getFoodGlossaryArticleByTerm", "GET", "/glossary/byterm/{term}"];
$methodsList[] = ["getRecipePhotos", "GET", "/recipe/{recipeId}/photos"];
$methodsList[] = ["getRecipeScanImages", "GET", "/recipe/{recipeId}/scans"];
$methodsList[] = ["addRecipeImage", "POST", "/recipe/{recipeId}/image"];
$methodsList[] = ["deleteRecipeNote", "DELETE", "/recipe/{recipeId}/note/{noteId}"];
$methodsList[] = ["getMySingleRecipeNote", "GET", "/recipe/{recipeId}/note/{noteId}"];
$methodsList[] = ["updateRecipeNote", "PUT", "/recipe/{recipeId}/note/{noteId}"];
$methodsList[] = ["getRecipeNotes", "GET", "/recipe/{recipeId}/notes"];
$methodsList[] = ["createRecipeNote", "POST", "/recipe/{recipeId}/note"];
$methodsList[] = ["deleteMySingleRecipe", "DELETE", "/recipe/{id}"];
$methodsList[] = ["getMySingleRecipe", "GET", "/recipe/{id}"];
$methodsList[] = ["getRelatedRecipes", "GET", "/recipe/{recipeId}/related"];
$methodsList[] = ["createRecipeFeedback", "POST", "/recipe/{recipeId}/feedback"];
$methodsList[] = ["getRandomRecipe", "GET", "/recipes/random"];
$methodsList[] = ["searchRecipes", "GET", "/recipes"];
$methodsList[] = ["getRecipeCategories", "GET", "/recipe/categories"];
$methodsList[] = ["getRecipeAutocomplete", "GET", "/recipe/autocomplete"];
$methodsList[] = ["createRecipeScan", "POST", "/recipe/scan"];
$methodsList[] = ["createRecipe", "POST", "/recipe"];
$methodsList[] = ["updateRecipe", "PUT", "/recipe"];
$methodsList[] = ["getUserRecentlyViewedRecipes", "GET", "/recipes/recentviews"];
$methodsList[] = ["getRecipeRaves", "GET", "/recipes/raves"];
$methodsList[] = ["getSingleReview", "GET", "/recipe/review/{reviewId}"];
$methodsList[] = ["updateReview", "PUT", "/recipe/review/{reviewId}"];
$methodsList[] = ["getMyRecipeReview", "GET", "/recipe/{recipeId}/review"];
$methodsList[] = ["createReview", "POST", "/recipe/{recipeId}/review"];
$methodsList[] = ["deleteRecipeReview", "DELETE", "/recipe/review/{reviewId}"];
$methodsList[] = ["getRecipeReviews", "GET", "/recipe/{recipeId}/reviews"];
$methodsList[] = ["getReviewReplies", "GET", "/recipe/review/{reviewId}/replies"];
$methodsList[] = ["addReplyToReview", "POST", "/recipe/review/{reviewId}/replies"];
$methodsList[] = ["deleteMyReviewReply", "DELETE", "/recipe/review/replies/{replyId}"];
$methodsList[] = ["updateMyReviewReply", "PUT", "/recipe/review/replies/{replyId}"];
$methodsList[] = ["deleteItemsFromGroceryList", "DELETE", "/grocerylist"];
$methodsList[] = ["getMyGroceryList", "GET", "/grocerylist"];
$methodsList[] = ["addRecipeToGroceryList", "POST", "/grocerylist/recipe"];
$methodsList[] = ["synchronizeGroceryList", "POST", "/grocerylist/sync"];
$methodsList[] = ["addSingleItemToGroceryList", "POST", "/grocerylist/item"];
$methodsList[] = ["deleteItemFromGroceryList", "DELETE", "/grocerylist/item/{guid}"];
$methodsList[] = ["updateGroceryItem", "PUT", "/grocerylist/item/{guid}"];
$methodsList[] = ["departmentalizeItemsInGroceryList", "POST", "/grocerylist/department"];

$allType = [];

$swagger = file_get_contents(dirname(APP_PATH) . '/test/swagger.json');
$swagger = json_decode($swagger, true);
$newBlocks = [];
$customBlocks = [];

$counter = 1;
foreach($swagger['paths'] as $vendorUrl => $methods){
    foreach($methods as $vendorMethod => $blockInfo) {
        $tmpBlockName = $counter . 'block';
        foreach($methodsList as $oneMethod){
            if($oneMethod[2] == $vendorUrl&&$oneMethod[1] == strtoupper(trim($vendorMethod))){
                $tmpBlockName = $oneMethod[0];
            }
        }
        if($tmpBlockName != $counter . 'block'){
            echo $tmpBlockName . '<br>';
        }else{
            continue;
        }

        $newBlock['name'] = $tmpBlockName;
        $newBlock['description'] = 'description';

        $customBlocks[$tmpBlockName]['dictionary'] = [];
        $newVendorUrl = str_replace('{', '{{', $vendorUrl);
        $newVendorUrl = str_replace('}', '}}', $newVendorUrl);
        $customBlocks[$tmpBlockName]['vendorUrl'] = 'http://api2.bigoven.com' . $newVendorUrl;
        $customBlocks[$tmpBlockName]['method'] = strtoupper($vendorMethod);

        $newArgs = [];
        $newArgs[] = [
            'name' => 'apiKey',
            'type' => 'credentials',
            'info' => 'Your API Key',
            'required' => true
        ];
        $newArgs[] = [
            'name' => 'credentialsUsername',
            'type' => 'credentials',
            'info' => 'Username of user.',
            'required' => true
        ];
        $newArgs[] = [
            'name' => 'credentialsPassword',
            'type' => 'credentials',
            'info' => 'Password of user.',
            'required' => true
        ];
        if(isset($blockInfo['parameters'])&&is_array($blockInfo['parameters'])) {
            foreach ($blockInfo['parameters'] as $arg) {
                if(isset($arg['type'])) {
                    if ($arg['type'] == 'string') {
                        $argType = 'String';
                    } else if ($arg['type'] == 'integer' || $arg['type'] == 'number') {
                        $argType = 'Number';
                    } else if ($arg['type'] == 'boolean') {
                        $argType = 'Boolean';
                    }
                }else{
                    $argType = 'String';
                }

                //$allType[$tmpBlockName . '-' . $arg['name'] . '-' . $vendorMethod . '-' . $vendorUrl] = $arg['name'];

                $optionName = $arg['name'];
                $oldDictionary = trim($optionName);
                if(strpos($optionName, '_')&&!in_array($optionName, ['id', 'rpp', 'pg', 'guid', 'req', 'lat', 'lng', 'any_kw', 'coll', 'title_kw', 'include_cat', 'exclude_cat', 'include_ing', 'exclude_ing', 'db', 'vtn', 'vgn', 'chs', 'glf', 'ntf', 'dyf', 'sff', 'slf', 'tnf', 'wmf', 'rmf', 'cps'])) {
                    $optionName = preg_replace_callback('|_[a-z0-9]|', function ($matches) {
                        return strtoupper(trim($matches[0], '_'));
                    }, $optionName);
                }else{
                    //echo $optionName . '<br>';
                }
                $customBlocks[$tmpBlockName]['dictionary'][$optionName] = $oldDictionary;

                $description = 'description';
                if(isset($arg['description'])){
                    $description = $arg['description'];
                }

                $newArgs[] = [
                    'name' => $optionName,
                    'type' => $argType,
                    'info' => $description,
                    'required' => $arg['required'],
                ];
            }
        }

        $newBlock['args'] = $newArgs;
        $newBlock['callbacks'] = [['name' => 'error', 'info' => 'Error'], ['name' => 'success', 'info' => 'Success']];

        $newBlocks[] = $newBlock;

        $counter++;
    }
}
//var_dump($allType);
//var_dump(array_unique($allType));
echo '<hr><pre>';
//echo var_export($newBlocks, true);
echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($newBlocks, true)));
echo '<hr>';
echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($customBlocks, true)));
echo '<hr></pre>';

exit();

// Include metadata array
$settings = include dirname(APP_PATH) . '/src/metadata/vendor.php';

if(
    !isset($settings['package']) ||
    !isset($settings['blocks']) ||
    !is_array($settings['blocks']) ||
    !isset($settings['custom'])
){
    throw new Exception('Wrong vendor.php format \'package\', \'blocks\' or \'customBlocksHandlers\' in root is miss');
}
$router = new Router($settings['package'], $settings['blocks'], $settings['custom']);
$router->setup();
$router->run();
http_response_code(200);
exit(200);
