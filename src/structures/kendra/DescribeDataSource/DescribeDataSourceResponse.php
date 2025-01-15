<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $IndexId
 * @property string|null $Name
 * @property 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE'|null $Type
 * @property Shapes\DataSourceConfiguration|null $Configuration
 * @property Shapes\DataSourceVpcConfiguration|null $VpcConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property string|null $Description
 * @property 'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'ACTIVE'|null $Status
 * @property string|null $Schedule
 * @property string|null $RoleArn
 * @property string|null $ErrorMessage
 * @property string|null $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration|null $CustomDocumentEnrichmentConfiguration
 */
class DescribeDataSourceResponse extends Response
{
}
