<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $IndexId
 * @property 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE' $Type
 * @property Shapes\DataSourceConfiguration|null $Configuration
 * @property Shapes\DataSourceVpcConfiguration|null $VpcConfiguration
 * @property string|null $Description
 * @property string|null $Schedule
 * @property string|null $RoleArn
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $ClientToken
 * @property string|null $LanguageCode
 * @property Shapes\CustomDocumentEnrichmentConfiguration|null $CustomDocumentEnrichmentConfiguration
 */
class CreateDataSourceRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     IndexId: string,
     *     Type: 'S3'|'SHAREPOINT'|'DATABASE'|'SALESFORCE'|'ONEDRIVE'|'SERVICENOW'|'CUSTOM'|'CONFLUENCE'|'GOOGLEDRIVE'|'WEBCRAWLER'|'WORKDOCS'|'FSX'|'SLACK'|'BOX'|'QUIP'|'JIRA'|'GITHUB'|'ALFRESCO'|'TEMPLATE',
     *     Configuration?: Shapes\DataSourceConfiguration|null,
     *     VpcConfiguration?: Shapes\DataSourceVpcConfiguration|null,
     *     Description?: string|null,
     *     Schedule?: string|null,
     *     RoleArn?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     ClientToken?: string|null,
     *     LanguageCode?: string|null,
     *     CustomDocumentEnrichmentConfiguration?: Shapes\CustomDocumentEnrichmentConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
