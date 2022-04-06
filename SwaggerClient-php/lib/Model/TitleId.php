<?php
/**
 * TitleId
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Fleximize Applications API
 *
 * Welcome to the Fleximize API!  **Important Notice:**  By submitting application, you confirm that you have obtained the consent of all individuals associated with it (directors, personal guarantors, mortgagors and shareholders etc). The personal information we have collected from you will be shared with fraud prevention agencies. This is to prevent fraud and money laundering and to verify the identity of all individuals supplied and associated with this application. If fraud is detected, you and these individuals could be refused certain services, finance and employment. Further details on the processing of information and the individual’s data processing rights can be found [here](https://www.cifas.org.uk/fpn).    If you encouter any problems or have any questions and inquiries, please contact the development team. Thank you.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: development@fleximize.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.33
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;
use \Swagger\Client\ObjectSerializer;

/**
 * TitleId Class Doc Comment
 *
 * @category Class
 * @description Person Title:   * &#x60;1&#x60; - Mr   * &#x60;2&#x60; - Mrs   * &#x60;3&#x60; - Miss   * &#x60;4&#x60; - Ms   * &#x60;5&#x60; - Dr   * &#x60;null&#x60; - Unknown
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TitleId
{
    /**
     * Possible values of this enum
     */
    const 1 = 1;
const 2 = 2;
const 3 = 3;
const 4 = 4;
const 5 = 5;
const null = ;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::1,
self::2,
self::3,
self::4,
self::5,
self::null,        ];
    }
}
