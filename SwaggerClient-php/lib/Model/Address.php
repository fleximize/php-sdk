<?php
/**
 * Address
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
 * Welcome to the Fleximize API!    If you encouter any problems or have any questions and inquiries, please contact the development team. Thank you.  **Important Notice:**  By submitting application, you confirm that you have obtained the consent of all individuals associated with it (directors, personal guarantors, mortgagors and shareholders etc). The personal information we have collected from you will be shared with fraud prevention agencies. This is to prevent fraud and money laundering and to verify the identity of all individuals supplied and associated with this application. If fraud is detected, you and these individuals could be refused certain services, finance and employment. Further details on the processing of information and the individual’s data processing rights can be found [here](https://www.cifas.org.uk/fpn).
 *
 * OpenAPI spec version: 2.0.0
 * Contact: development@fleximize.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.25
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Address Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'address';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'abode_name_no' => 'string',
'street' => 'string',
'street2' => 'string',
'town' => 'string',
'county' => 'string',
'postcode' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'abode_name_no' => null,
'street' => null,
'street2' => null,
'town' => null,
'county' => null,
'postcode' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'abode_name_no' => 'abode_name_no',
'street' => 'street',
'street2' => 'street2',
'town' => 'town',
'county' => 'county',
'postcode' => 'postcode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'abode_name_no' => 'setAbodeNameNo',
'street' => 'setStreet',
'street2' => 'setStreet2',
'town' => 'setTown',
'county' => 'setCounty',
'postcode' => 'setPostcode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'abode_name_no' => 'getAbodeNameNo',
'street' => 'getStreet',
'street2' => 'getStreet2',
'town' => 'getTown',
'county' => 'getCounty',
'postcode' => 'getPostcode'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['abode_name_no'] = isset($data['abode_name_no']) ? $data['abode_name_no'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['street2'] = isset($data['street2']) ? $data['street2'] : null;
        $this->container['town'] = isset($data['town']) ? $data['town'] : null;
        $this->container['county'] = isset($data['county']) ? $data['county'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['abode_name_no'] === null) {
            $invalidProperties[] = "'abode_name_no' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalidProperties[] = "'street' can't be null";
        }
        if ($this->container['town'] === null) {
            $invalidProperties[] = "'town' can't be null";
        }
        if ($this->container['postcode'] === null) {
            $invalidProperties[] = "'postcode' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets abode_name_no
     *
     * @return string
     */
    public function getAbodeNameNo()
    {
        return $this->container['abode_name_no'];
    }

    /**
     * Sets abode_name_no
     *
     * @param string $abode_name_no Building Name or Number    **Required for first director*
     *
     * @return $this
     */
    public function setAbodeNameNo($abode_name_no)
    {
        $this->container['abode_name_no'] = $abode_name_no;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street name    **Required for first director*
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets street2
     *
     * @return string
     */
    public function getStreet2()
    {
        return $this->container['street2'];
    }

    /**
     * Sets street2
     *
     * @param string $street2 Address second line    **Required for first director*
     *
     * @return $this
     */
    public function setStreet2($street2)
    {
        $this->container['street2'] = $street2;

        return $this;
    }

    /**
     * Gets town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->container['town'];
    }

    /**
     * Sets town
     *
     * @param string $town Town name    **Required for first director*
     *
     * @return $this
     */
    public function setTown($town)
    {
        $this->container['town'] = $town;

        return $this;
    }

    /**
     * Gets county
     *
     * @return string
     */
    public function getCounty()
    {
        return $this->container['county'];
    }

    /**
     * Sets county
     *
     * @param string $county County name    **Required for first director*
     *
     * @return $this
     */
    public function setCounty($county)
    {
        $this->container['county'] = $county;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode Postocode    **Required for first director*
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        $this->container['postcode'] = $postcode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
