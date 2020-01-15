# Application

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_type_id** | **int** | Business Type:   * &#x60;1&#x60; - Sole Trader   * &#x60;2&#x60; - Non-Limited Partnership   * &#x60;3&#x60; - Limited Company   * &#x60;4&#x60; - Limited Partnership (LLP) | 
**company_name** | **string** | Company Name | 
**registration_number** | **string** | Company Registration Number | [optional] 
**title_id** | [**\Swagger\Client\Model\TitleId**](TitleId.md) |  | 
**first_name** | [**\Swagger\Client\Model\FirstName**](FirstName.md) |  | 
**last_name** | [**\Swagger\Client\Model\LastName**](LastName.md) |  | 
**phone** | **string** | Applicant phone number | 
**email** | **string** | Applicant email address | 
**loan_amount** | **double** | Loan amount | 
**term** | **int** | Loan term | 
**funding_urgency** | **int** | How quick funds are required:   * &#x60;1&#x60; - As soon as possible   * &#x60;2&#x60; - Within a few weeks   * &#x60;3&#x60; - I just want to see what&#x27;s available | 
**loan_purpose_id** | **int** | Loan purpose:   * &#x60;1&#x60; - Hire staff   * &#x60;2&#x60; - Management buyout   * &#x60;3&#x60; - Marketing   * &#x60;4&#x60; - Moving premises   * &#x60;5&#x60; - Fulfil an order or contract   * &#x60;6&#x60; - Pay a due bill   * &#x60;7&#x60; - Pay HMRC   * &#x60;8&#x60; - Pay staff   * &#x60;9&#x60; - Purchase stock   * &#x60;10&#x60; - Purchase equipment   * &#x60;11&#x60; - Refinance debt   * &#x60;12&#x60; - Refurbish premises   * &#x60;13&#x60; - Upgrade website   * &#x60;14&#x60; - Business expansion   * &#x60;15&#x60; - Working capital / cash flow   * &#x60;16&#x60; - Other (please specify) | 
**other_purpose** | **string** | Loan purpose needed when loan purpose id is 15, 16 | 
**internal_id** | **string** | Your internal ID | [optional] 
**notes** | **string** | Notes | [optional] 
**is_test** | **bool** | When set to true, the application will not be reviewed | [optional] 
**privacy_policy_consent** | **bool** | When set to true, you are confirming that your client has consented to Fleximize and its group of companies using their personal information in the ways described in the [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy) and [Terms of Website Use](https://fleximize.com/terms-of-use/privacy-policy).  **Fleximize won&#x27;t be able to process an application without _privacy_policy_consent_ set to true** | 
**cra_checks_consent** | **bool** | When set to true you are confirming that your client authorises Fleximize to perform credit reference agency (CRA) searches on the business, directors, any individuals supplied as part of the application, and their financial associates. A record of this search will be recorded against all applicants and may be seen by other companies if they carry out a credit enquiry. Before submitting this application, please confirm that you have obtained the consent of all individuals concerned and provided them a copy of our [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy). For more information on how we and the CRAs use your information, please refer to our [Privacy Policy](https://fleximize.com/terms-of-use/privacy-policy).  **Fleximize won&#x27;t be able to process an application without _cra_checks_consent_ set to true** | 
**refer_consent** | **bool** | If Fleximize are unable to provide the finance requested, this consent allows us to refer the credit application and personal details to our carefully selected panel of brokers and lenders to assist in obtaining credit. | 
**company** | [**\Swagger\Client\Model\Company**](Company.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

