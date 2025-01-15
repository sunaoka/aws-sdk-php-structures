<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSourceConfiguration|null $S3Configuration
 * @property SharePointConfiguration|null $SharePointConfiguration
 * @property DatabaseConfiguration|null $DatabaseConfiguration
 * @property SalesforceConfiguration|null $SalesforceConfiguration
 * @property OneDriveConfiguration|null $OneDriveConfiguration
 * @property ServiceNowConfiguration|null $ServiceNowConfiguration
 * @property ConfluenceConfiguration|null $ConfluenceConfiguration
 * @property GoogleDriveConfiguration|null $GoogleDriveConfiguration
 * @property WebCrawlerConfiguration|null $WebCrawlerConfiguration
 * @property WorkDocsConfiguration|null $WorkDocsConfiguration
 * @property FsxConfiguration|null $FsxConfiguration
 * @property SlackConfiguration|null $SlackConfiguration
 * @property BoxConfiguration|null $BoxConfiguration
 * @property QuipConfiguration|null $QuipConfiguration
 * @property JiraConfiguration|null $JiraConfiguration
 * @property GitHubConfiguration|null $GitHubConfiguration
 * @property AlfrescoConfiguration|null $AlfrescoConfiguration
 * @property TemplateConfiguration|null $TemplateConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     S3Configuration?: S3DataSourceConfiguration|null,
     *     SharePointConfiguration?: SharePointConfiguration|null,
     *     DatabaseConfiguration?: DatabaseConfiguration|null,
     *     SalesforceConfiguration?: SalesforceConfiguration|null,
     *     OneDriveConfiguration?: OneDriveConfiguration|null,
     *     ServiceNowConfiguration?: ServiceNowConfiguration|null,
     *     ConfluenceConfiguration?: ConfluenceConfiguration|null,
     *     GoogleDriveConfiguration?: GoogleDriveConfiguration|null,
     *     WebCrawlerConfiguration?: WebCrawlerConfiguration|null,
     *     WorkDocsConfiguration?: WorkDocsConfiguration|null,
     *     FsxConfiguration?: FsxConfiguration|null,
     *     SlackConfiguration?: SlackConfiguration|null,
     *     BoxConfiguration?: BoxConfiguration|null,
     *     QuipConfiguration?: QuipConfiguration|null,
     *     JiraConfiguration?: JiraConfiguration|null,
     *     GitHubConfiguration?: GitHubConfiguration|null,
     *     AlfrescoConfiguration?: AlfrescoConfiguration|null,
     *     TemplateConfiguration?: TemplateConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
