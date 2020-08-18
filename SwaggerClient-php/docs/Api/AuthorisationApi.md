# Swagger\Client\AuthorisationApi

All URIs are relative to *https://api.fleximize.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getToken**](AuthorisationApi.md#gettoken) | **POST** /get_token | Gets authentication token

# **getToken**
> \Swagger\Client\Model\InlineResponse200 getToken($body, $user_name, $password)

Gets authentication token

Gets authentication token using credentials.    Token is valid for **7 days**. After that new token should be optained using the same endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LoginCredentials(); // \Swagger\Client\Model\LoginCredentials | Fleximize uses API token to allow access to the API called JWT. You can get your own token or ask fleximize admin to generate it for you.

All Fleximize endpoints require authorization using the API token, which is expected to be included in all API requests to the server in a header that looks like the following: 

**Authorization: Bearer {yourtokenhere}**

$user_name = "user_name_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->getToken($body, $user_name, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorisationApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LoginCredentials**](../Model/LoginCredentials.md)| Fleximize uses API token to allow access to the API called JWT. You can get your own token or ask fleximize admin to generate it for you.

All Fleximize endpoints require authorization using the API token, which is expected to be included in all API requests to the server in a header that looks like the following: 

**Authorization: Bearer {yourtokenhere}**
 |
 **user_name** | **string**|  |
 **password** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getToken**
> \Swagger\Client\Model\InlineResponse200 getToken($body, $user_name, $password)

Gets authentication token

Gets authentication token using credentials.    Token is valid for **7 days**. After that new token should be optained using the same endpoint

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthorisationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\LoginCredentials(); // \Swagger\Client\Model\LoginCredentials | Fleximize uses API token to allow access to the API called JWT. You can get your own token or ask fleximize admin to generate it for you.

All Fleximize endpoints require authorization using the API token, which is expected to be included in all API requests to the server in a header that looks like the following: 

**Authorization: Bearer {yourtokenhere}**

$user_name = "user_name_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->getToken($body, $user_name, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthorisationApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\LoginCredentials**](../Model/LoginCredentials.md)| Fleximize uses API token to allow access to the API called JWT. You can get your own token or ask fleximize admin to generate it for you.

All Fleximize endpoints require authorization using the API token, which is expected to be included in all API requests to the server in a header that looks like the following: 

**Authorization: Bearer {yourtokenhere}**
 |
 **user_name** | **string**|  |
 **password** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded, application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

