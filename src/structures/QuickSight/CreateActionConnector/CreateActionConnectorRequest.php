<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateActionConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $ActionConnectorId
 * @property string $Name
 * @property 'GENERIC_HTTP'|'SERVICENOW_NOW_PLATFORM'|'SALESFORCE_CRM'|'MICROSOFT_OUTLOOK'|'PAGERDUTY_ADVANCE'|'JIRA_CLOUD'|'ATLASSIAN_CONFLUENCE'|'AMAZON_S3'|'AMAZON_BEDROCK_AGENT_RUNTIME'|'AMAZON_BEDROCK_RUNTIME'|'AMAZON_BEDROCK_DATA_AUTOMATION_RUNTIME'|'AMAZON_TEXTRACT'|'AMAZON_COMPREHEND'|'AMAZON_COMPREHEND_MEDICAL'|'MICROSOFT_ONEDRIVE'|'MICROSOFT_SHAREPOINT'|'MICROSOFT_TEAMS'|'SAP_BUSINESSPARTNER'|'SAP_PRODUCTMASTERDATA'|'SAP_PHYSICALINVENTORY'|'SAP_BILLOFMATERIALS'|'SAP_MATERIALSTOCK'|'ZENDESK_SUITE'|'SMARTSHEET'|'SLACK'|'ASANA'|'BAMBOO_HR' $Type
 * @property Shapes\AuthConfig $AuthenticationConfig
 * @property string|null $Description
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property string|null $VpcConnectionArn
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateActionConnectorRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     ActionConnectorId: string,
     *     Name: string,
     *     Type: 'GENERIC_HTTP'|'SERVICENOW_NOW_PLATFORM'|'SALESFORCE_CRM'|'MICROSOFT_OUTLOOK'|'PAGERDUTY_ADVANCE'|'JIRA_CLOUD'|'ATLASSIAN_CONFLUENCE'|'AMAZON_S3'|'AMAZON_BEDROCK_AGENT_RUNTIME'|'AMAZON_BEDROCK_RUNTIME'|'AMAZON_BEDROCK_DATA_AUTOMATION_RUNTIME'|'AMAZON_TEXTRACT'|'AMAZON_COMPREHEND'|'AMAZON_COMPREHEND_MEDICAL'|'MICROSOFT_ONEDRIVE'|'MICROSOFT_SHAREPOINT'|'MICROSOFT_TEAMS'|'SAP_BUSINESSPARTNER'|'SAP_PRODUCTMASTERDATA'|'SAP_PHYSICALINVENTORY'|'SAP_BILLOFMATERIALS'|'SAP_MATERIALSTOCK'|'ZENDESK_SUITE'|'SMARTSHEET'|'SLACK'|'ASANA'|'BAMBOO_HR',
     *     AuthenticationConfig: Shapes\AuthConfig,
     *     Description?: string|null,
     *     Permissions?: list<Shapes\ResourcePermission>|null,
     *     VpcConnectionArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
