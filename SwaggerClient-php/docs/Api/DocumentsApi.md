# Swagger\Client\DocumentsApi

All URIs are relative to *https://api.fleximize.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllowedDocTypes**](DocumentsApi.md#getalloweddoctypes) | **GET** /application/document-types | Gets list of allowed document types to upload
[**postApplicationDocuments**](DocumentsApi.md#postapplicationdocuments) | **POST** /application/{application_id}/upload | Post application related document

# **getAllowedDocTypes**
> \Swagger\Client\Model\InlineResponse2004[] getAllowedDocTypes()

Gets list of allowed document types to upload

Gets list of allowed document types to upload. Each of ID returned is used as \"document_type\" paremeter in \"upload\" endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllowedDocTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->getAllowedDocTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse2004[]**](../Model/InlineResponse2004.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postApplicationDocuments**
> string postApplicationDocuments($document_type, $file, $application_id)

Post application related document

Post document related to application

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_type = 56; // int | 
$file = "file_example"; // string | 
$application_id = "application_id_example"; // string | application_id value returned in in the `/application` response

try {
    $result = $apiInstance->postApplicationDocuments($document_type, $file, $application_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentsApi->postApplicationDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **document_type** | **int**|  |
 **file** | **string****string**|  |
 **application_id** | **string**| application_id value returned in in the &#x60;/application&#x60; response |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: text/plain, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

