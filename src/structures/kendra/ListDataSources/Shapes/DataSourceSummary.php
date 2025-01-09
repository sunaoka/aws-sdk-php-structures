<?php

namespace Sunaoka\Aws\Structures\kendra\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Id
 * @property 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE' $Type
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'ACTIVE' $Status
 * @property string $LanguageCode
 */
class DataSourceSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Id?: string,
     *     Type?: 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE',
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     Status?: 'CREATING'|'DELETING'|'FAILED'|'UPDATING'|'ACTIVE',
     *     LanguageCode?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
