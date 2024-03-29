<?php
/**
 * Application
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

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Application Class Doc Comment
 *
 * @category Class
 * @description Application object
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Application implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_test' => 'bool',
'business_type_id' => 'int',
'company_name' => 'string',
'registration_number' => 'string',
'title_id' => '\Swagger\Client\Model\TitleId',
'first_name' => '\Swagger\Client\Model\FirstName',
'last_name' => '\Swagger\Client\Model\LastName',
'phone' => 'string',
'email' => 'string',
'loan_amount' => 'double',
'term' => 'int',
'funding_urgency' => 'int',
'loan_purpose_id' => 'int',
'other_purpose' => 'string',
'internal_id' => 'string',
'account_score_customer' => 'string',
'notes' => 'string',
'privacy_policy_consent' => 'bool',
'cra_checks_consent' => 'bool',
'refer_consent' => 'bool',
'company' => '\Swagger\Client\Model\Company'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_test' => null,
'business_type_id' => null,
'company_name' => null,
'registration_number' => null,
'title_id' => null,
'first_name' => null,
'last_name' => null,
'phone' => null,
'email' => 'email',
'loan_amount' => 'double',
'term' => null,
'funding_urgency' => null,
'loan_purpose_id' => null,
'other_purpose' => null,
'internal_id' => null,
'account_score_customer' => null,
'notes' => null,
'privacy_policy_consent' => null,
'cra_checks_consent' => null,
'refer_consent' => null,
'company' => null    ];

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
        'is_test' => 'is_test',
'business_type_id' => 'business_type_id',
'company_name' => 'company_name',
'registration_number' => 'registration_number',
'title_id' => 'title_id',
'first_name' => 'first_name',
'last_name' => 'last_name',
'phone' => 'phone',
'email' => 'email',
'loan_amount' => 'loan_amount',
'term' => 'term',
'funding_urgency' => 'funding_urgency',
'loan_purpose_id' => 'loan_purpose_id',
'other_purpose' => 'other_purpose',
'internal_id' => 'internal_id',
'account_score_customer' => 'account_score_customer',
'notes' => 'notes',
'privacy_policy_consent' => 'privacy_policy_consent',
'cra_checks_consent' => 'cra_checks_consent',
'refer_consent' => 'refer_consent',
'company' => 'company'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_test' => 'setIsTest',
'business_type_id' => 'setBusinessTypeId',
'company_name' => 'setCompanyName',
'registration_number' => 'setRegistrationNumber',
'title_id' => 'setTitleId',
'first_name' => 'setFirstName',
'last_name' => 'setLastName',
'phone' => 'setPhone',
'email' => 'setEmail',
'loan_amount' => 'setLoanAmount',
'term' => 'setTerm',
'funding_urgency' => 'setFundingUrgency',
'loan_purpose_id' => 'setLoanPurposeId',
'other_purpose' => 'setOtherPurpose',
'internal_id' => 'setInternalId',
'account_score_customer' => 'setAccountScoreCustomer',
'notes' => 'setNotes',
'privacy_policy_consent' => 'setPrivacyPolicyConsent',
'cra_checks_consent' => 'setCraChecksConsent',
'refer_consent' => 'setReferConsent',
'company' => 'setCompany'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_test' => 'getIsTest',
'business_type_id' => 'getBusinessTypeId',
'company_name' => 'getCompanyName',
'registration_number' => 'getRegistrationNumber',
'title_id' => 'getTitleId',
'first_name' => 'getFirstName',
'last_name' => 'getLastName',
'phone' => 'getPhone',
'email' => 'getEmail',
'loan_amount' => 'getLoanAmount',
'term' => 'getTerm',
'funding_urgency' => 'getFundingUrgency',
'loan_purpose_id' => 'getLoanPurposeId',
'other_purpose' => 'getOtherPurpose',
'internal_id' => 'getInternalId',
'account_score_customer' => 'getAccountScoreCustomer',
'notes' => 'getNotes',
'privacy_policy_consent' => 'getPrivacyPolicyConsent',
'cra_checks_consent' => 'getCraChecksConsent',
'refer_consent' => 'getReferConsent',
'company' => 'getCompany'    ];

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

    const BUSINESS_TYPE_ID_1 = 1;
const BUSINESS_TYPE_ID_2 = 2;
const BUSINESS_TYPE_ID_3 = 3;
const BUSINESS_TYPE_ID_4 = 4;
const FUNDING_URGENCY_1 = 1;
const FUNDING_URGENCY_2 = 2;
const FUNDING_URGENCY_3 = 3;
const LOAN_PURPOSE_ID_1 = 1;
const LOAN_PURPOSE_ID_2 = 2;
const LOAN_PURPOSE_ID_3 = 3;
const LOAN_PURPOSE_ID_4 = 4;
const LOAN_PURPOSE_ID_5 = 5;
const LOAN_PURPOSE_ID_6 = 6;
const LOAN_PURPOSE_ID_7 = 7;
const LOAN_PURPOSE_ID_8 = 8;
const LOAN_PURPOSE_ID_9 = 9;
const LOAN_PURPOSE_ID_10 = 10;
const LOAN_PURPOSE_ID_11 = 11;
const LOAN_PURPOSE_ID_12 = 12;
const LOAN_PURPOSE_ID_13 = 13;
const LOAN_PURPOSE_ID_14 = 14;
const LOAN_PURPOSE_ID_15 = 15;
const LOAN_PURPOSE_ID_16 = 16;

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBusinessTypeIdAllowableValues()
    {
        return [
            self::BUSINESS_TYPE_ID_1,
self::BUSINESS_TYPE_ID_2,
self::BUSINESS_TYPE_ID_3,
self::BUSINESS_TYPE_ID_4,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFundingUrgencyAllowableValues()
    {
        return [
            self::FUNDING_URGENCY_1,
self::FUNDING_URGENCY_2,
self::FUNDING_URGENCY_3,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLoanPurposeIdAllowableValues()
    {
        return [
            self::LOAN_PURPOSE_ID_1,
self::LOAN_PURPOSE_ID_2,
self::LOAN_PURPOSE_ID_3,
self::LOAN_PURPOSE_ID_4,
self::LOAN_PURPOSE_ID_5,
self::LOAN_PURPOSE_ID_6,
self::LOAN_PURPOSE_ID_7,
self::LOAN_PURPOSE_ID_8,
self::LOAN_PURPOSE_ID_9,
self::LOAN_PURPOSE_ID_10,
self::LOAN_PURPOSE_ID_11,
self::LOAN_PURPOSE_ID_12,
self::LOAN_PURPOSE_ID_13,
self::LOAN_PURPOSE_ID_14,
self::LOAN_PURPOSE_ID_15,
self::LOAN_PURPOSE_ID_16,        ];
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
        $this->container['is_test'] = isset($data['is_test']) ? $data['is_test'] : null;
        $this->container['business_type_id'] = isset($data['business_type_id']) ? $data['business_type_id'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['registration_number'] = isset($data['registration_number']) ? $data['registration_number'] : null;
        $this->container['title_id'] = isset($data['title_id']) ? $data['title_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['loan_amount'] = isset($data['loan_amount']) ? $data['loan_amount'] : null;
        $this->container['term'] = isset($data['term']) ? $data['term'] : null;
        $this->container['funding_urgency'] = isset($data['funding_urgency']) ? $data['funding_urgency'] : null;
        $this->container['loan_purpose_id'] = isset($data['loan_purpose_id']) ? $data['loan_purpose_id'] : null;
        $this->container['other_purpose'] = isset($data['other_purpose']) ? $data['other_purpose'] : null;
        $this->container['internal_id'] = isset($data['internal_id']) ? $data['internal_id'] : null;
        $this->container['account_score_customer'] = isset($data['account_score_customer']) ? $data['account_score_customer'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['privacy_policy_consent'] = isset($data['privacy_policy_consent']) ? $data['privacy_policy_consent'] : null;
        $this->container['cra_checks_consent'] = isset($data['cra_checks_consent']) ? $data['cra_checks_consent'] : null;
        $this->container['refer_consent'] = isset($data['refer_consent']) ? $data['refer_consent'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['business_type_id'] === null) {
            $invalidProperties[] = "'business_type_id' can't be null";
        }
        $allowedValues = $this->getBusinessTypeIdAllowableValues();
        if (!is_null($this->container['business_type_id']) && !in_array($this->container['business_type_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'business_type_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['title_id'] === null) {
            $invalidProperties[] = "'title_id' can't be null";
        }
        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['phone'] === null) {
            $invalidProperties[] = "'phone' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['loan_amount'] === null) {
            $invalidProperties[] = "'loan_amount' can't be null";
        }
        if ($this->container['term'] === null) {
            $invalidProperties[] = "'term' can't be null";
        }
        if ($this->container['funding_urgency'] === null) {
            $invalidProperties[] = "'funding_urgency' can't be null";
        }
        $allowedValues = $this->getFundingUrgencyAllowableValues();
        if (!is_null($this->container['funding_urgency']) && !in_array($this->container['funding_urgency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'funding_urgency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['loan_purpose_id'] === null) {
            $invalidProperties[] = "'loan_purpose_id' can't be null";
        }
        $allowedValues = $this->getLoanPurposeIdAllowableValues();
        if (!is_null($this->container['loan_purpose_id']) && !in_array($this->container['loan_purpose_id'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'loan_purpose_id', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['other_purpose'] === null) {
            $invalidProperties[] = "'other_purpose' can't be null";
        }
        if ($this->container['privacy_policy_consent'] === null) {
            $invalidProperties[] = "'privacy_policy_consent' can't be null";
        }
        if ($this->container['cra_checks_consent'] === null) {
            $invalidProperties[] = "'cra_checks_consent' can't be null";
        }
        if ($this->container['refer_consent'] === null) {
            $invalidProperties[] = "'refer_consent' can't be null";
        }
        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
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
     * Gets is_test
     *
     * @return bool
     */
    public function getIsTest()
    {
        return $this->container['is_test'];
    }

    /**
     * Sets is_test
     *
     * @param bool $is_test When set to true, the application will be automatically moved to test status, and will not reviewed or processed by the business. While test applications passed through the API are sent to our live systems, marking them as test will prevent credit searches from being run on the company and individuals supplied. As the application data from your test will be stored in our live database, we do recommend using dummy data where possible.
     *
     * @return $this
     */
    public function setIsTest($is_test)
    {
        $this->container['is_test'] = $is_test;

        return $this;
    }

    /**
     * Gets business_type_id
     *
     * @return int
     */
    public function getBusinessTypeId()
    {
        return $this->container['business_type_id'];
    }

    /**
     * Sets business_type_id
     *
     * @param int $business_type_id Business Type:   * `1` - Sole Trader   * `2` - Non-Limited Partnership   * `3` - Limited Company   * `4` - Limited Partnership (LLP)
     *
     * @return $this
     */
    public function setBusinessTypeId($business_type_id)
    {
        $allowedValues = $this->getBusinessTypeIdAllowableValues();
        if (!in_array($business_type_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'business_type_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['business_type_id'] = $business_type_id;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company Name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets registration_number
     *
     * @return string
     */
    public function getRegistrationNumber()
    {
        return $this->container['registration_number'];
    }

    /**
     * Sets registration_number
     *
     * @param string $registration_number Company Registration Number
     *
     * @return $this
     */
    public function setRegistrationNumber($registration_number)
    {
        $this->container['registration_number'] = $registration_number;

        return $this;
    }

    /**
     * Gets title_id
     *
     * @return \Swagger\Client\Model\TitleId
     */
    public function getTitleId()
    {
        return $this->container['title_id'];
    }

    /**
     * Sets title_id
     *
     * @param \Swagger\Client\Model\TitleId $title_id title_id
     *
     * @return $this
     */
    public function setTitleId($title_id)
    {
        $this->container['title_id'] = $title_id;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return \Swagger\Client\Model\FirstName
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param \Swagger\Client\Model\FirstName $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return \Swagger\Client\Model\LastName
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param \Swagger\Client\Model\LastName $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Applicant phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Applicant email address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets loan_amount
     *
     * @return double
     */
    public function getLoanAmount()
    {
        return $this->container['loan_amount'];
    }

    /**
     * Sets loan_amount
     *
     * @param double $loan_amount Loan amount
     *
     * @return $this
     */
    public function setLoanAmount($loan_amount)
    {
        $this->container['loan_amount'] = $loan_amount;

        return $this;
    }

    /**
     * Gets term
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->container['term'];
    }

    /**
     * Sets term
     *
     * @param int $term Loan term
     *
     * @return $this
     */
    public function setTerm($term)
    {
        $this->container['term'] = $term;

        return $this;
    }

    /**
     * Gets funding_urgency
     *
     * @return int
     */
    public function getFundingUrgency()
    {
        return $this->container['funding_urgency'];
    }

    /**
     * Sets funding_urgency
     *
     * @param int $funding_urgency How quick funds are required:   * `1` - As soon as possible   * `2` - Within a few weeks   * `3` - I just want to see what's available
     *
     * @return $this
     */
    public function setFundingUrgency($funding_urgency)
    {
        $allowedValues = $this->getFundingUrgencyAllowableValues();
        if (!in_array($funding_urgency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'funding_urgency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['funding_urgency'] = $funding_urgency;

        return $this;
    }

    /**
     * Gets loan_purpose_id
     *
     * @return int
     */
    public function getLoanPurposeId()
    {
        return $this->container['loan_purpose_id'];
    }

    /**
     * Sets loan_purpose_id
     *
     * @param int $loan_purpose_id Loan purpose:   * `1` - Hire staff   * `2` - Management buyout   * `3` - Marketing   * `4` - Moving premises   * `5` - Fulfil an order or contract   * `6` - Pay a due bill   * `7` - Pay HMRC   * `8` - Pay staff   * `9` - Purchase stock   * `10` - Purchase equipment   * `11` - Refinance debt   * `12` - Refurbish premises   * `13` - Upgrade website   * `14` - Business expansion   * `15` - Working capital / cash flow   * `16` - Other (please specify)
     *
     * @return $this
     */
    public function setLoanPurposeId($loan_purpose_id)
    {
        $allowedValues = $this->getLoanPurposeIdAllowableValues();
        if (!in_array($loan_purpose_id, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'loan_purpose_id', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['loan_purpose_id'] = $loan_purpose_id;

        return $this;
    }

    /**
     * Gets other_purpose
     *
     * @return string
     */
    public function getOtherPurpose()
    {
        return $this->container['other_purpose'];
    }

    /**
     * Sets other_purpose
     *
     * @param string $other_purpose Loan purpose is required when loan purpose id is 14, 15 or 16
     *
     * @return $this
     */
    public function setOtherPurpose($other_purpose)
    {
        $this->container['other_purpose'] = $other_purpose;

        return $this;
    }

    /**
     * Gets internal_id
     *
     * @return string
     */
    public function getInternalId()
    {
        return $this->container['internal_id'];
    }

    /**
     * Sets internal_id
     *
     * @param string $internal_id Your internal ID
     *
     * @return $this
     */
    public function setInternalId($internal_id)
    {
        $this->container['internal_id'] = $internal_id;

        return $this;
    }

    /**
     * Gets account_score_customer
     *
     * @return string
     */
    public function getAccountScoreCustomer()
    {
        return $this->container['account_score_customer'];
    }

    /**
     * Sets account_score_customer
     *
     * @param string $account_score_customer AccountScore Customer Reference
     *
     * @return $this
     */
    public function setAccountScoreCustomer($account_score_customer)
    {
        $this->container['account_score_customer'] = $account_score_customer;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes Notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets privacy_policy_consent
     *
     * @return bool
     */
    public function getPrivacyPolicyConsent()
    {
        return $this->container['privacy_policy_consent'];
    }

    /**
     * Sets privacy_policy_consent
     *
     * @param bool $privacy_policy_consent When set to true, you are confirming that your client has consented to Fleximize and its group of companies using their personal information in the ways described in the [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy) and [Terms of Website Use](https://fleximize.com/terms-of-use/privacy-policy).  **Fleximize won't be able to process an application without _privacy_policy_consent_ set to true**
     *
     * @return $this
     */
    public function setPrivacyPolicyConsent($privacy_policy_consent)
    {
        $this->container['privacy_policy_consent'] = $privacy_policy_consent;

        return $this;
    }

    /**
     * Gets cra_checks_consent
     *
     * @return bool
     */
    public function getCraChecksConsent()
    {
        return $this->container['cra_checks_consent'];
    }

    /**
     * Sets cra_checks_consent
     *
     * @param bool $cra_checks_consent When set to true you are confirming that your client authorises Fleximize to perform credit reference agency (CRA) searches on the business, directors, any individuals supplied as part of the application, and their financial associates. A record of this search will be recorded against all applicants and may be seen by other companies if they carry out a credit enquiry. Before submitting this application, please confirm that you have obtained the consent of all individuals concerned and provided them a copy of our [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy). For more information on how we and the CRAs use your information, please refer to our [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy).  **Fleximize won't be able to process an application without _cra_checks_consent_ set to true**
     *
     * @return $this
     */
    public function setCraChecksConsent($cra_checks_consent)
    {
        $this->container['cra_checks_consent'] = $cra_checks_consent;

        return $this;
    }

    /**
     * Gets refer_consent
     *
     * @return bool
     */
    public function getReferConsent()
    {
        return $this->container['refer_consent'];
    }

    /**
     * Sets refer_consent
     *
     * @param bool $refer_consent If Fleximize are unable to provide the finance requested, this consent allows us to refer the credit application and personal details to our carefully selected panel of brokers and lenders to assist in obtaining credit.
     *
     * @return $this
     */
    public function setReferConsent($refer_consent)
    {
        $this->container['refer_consent'] = $refer_consent;

        return $this;
    }

    /**
     * Gets company
     *
     * @return \Swagger\Client\Model\Company
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param \Swagger\Client\Model\Company $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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
