<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IndexId
 * @property 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE' $Type
 * @property Shapes\DataSourceConfiguration $Configuration
 * @property Shapes\DataSourceVpcConfiguration $VpcConfiguration
 * @property string $Description
 * @property string $Schedule
 * @property string $RoleArn
 * @property list<Shapes\Tag> $Tags
 * @property string $ClientToken
 * @property string $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration $CustomDocumentEnrichmentConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IndexId: string,
     *     Type: 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE',
     *     Configuration?: Shapes\DataSourceConfiguration,
     *     VpcConfiguration?: Shapes\DataSourceVpcConfiguration,
     *     Description?: string,
     *     Schedule?: string,
     *     RoleArn?: string,
     *     Tags?: list<Shapes\Tag>,
     *     ClientToken?: string,
     *     LanguageCode?: string,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
