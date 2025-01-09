<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $IndexId
 * @property string $Name
 * @property 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE' $Type
 * @property Shapes\DataSourceConfiguration $Configuration
 * @property Shapes\DataSourceVpcConfiguration $VpcConfiguration
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property string $Description
 * @property 'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'ACTIVE' $Status
 * @property string $Schedule
 * @property string $RoleArn
 * @property string $ErrorMessage
 * @property string $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration $CustomDocumentEnrichmentConfiguration
 */
class DescribeDataSourceResponse extends Response
{
}
