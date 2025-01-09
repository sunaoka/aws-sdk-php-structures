<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3DataSourceConfiguration $S3Configuration
 * @property SharePointConfiguration $SharePointConfiguration
 * @property DatabaseConfiguration $DatabaseConfiguration
 * @property SalesforceConfiguration $SalesforceConfiguration
 * @property OneDriveConfiguration $OneDriveConfiguration
 * @property ServiceNowConfiguration $ServiceNowConfiguration
 * @property ConfluenceConfiguration $ConfluenceConfiguration
 * @property GoogleDriveConfiguration $GoogleDriveConfiguration
 * @property WebCrawlerConfiguration $WebCrawlerConfiguration
 * @property WorkDocsConfiguration $WorkDocsConfiguration
 * @property FsxConfiguration $FsxConfiguration
 * @property SlackConfiguration $SlackConfiguration
 * @property BoxConfiguration $BoxConfiguration
 * @property QuipConfiguration $QuipConfiguration
 * @property JiraConfiguration $JiraConfiguration
 * @property GitHubConfiguration $GitHubConfiguration
 * @property AlfrescoConfiguration $AlfrescoConfiguration
 * @property TemplateConfiguration $TemplateConfiguration
 */
class DataSourceConfiguration extends Shape
{
    /**
     * @param array{
     *     S3Configuration?: S3DataSourceConfiguration,
     *     SharePointConfiguration?: SharePointConfiguration,
     *     DatabaseConfiguration?: DatabaseConfiguration,
     *     SalesforceConfiguration?: SalesforceConfiguration,
     *     OneDriveConfiguration?: OneDriveConfiguration,
     *     ServiceNowConfiguration?: ServiceNowConfiguration,
     *     ConfluenceConfiguration?: ConfluenceConfiguration,
     *     GoogleDriveConfiguration?: GoogleDriveConfiguration,
     *     WebCrawlerConfiguration?: WebCrawlerConfiguration,
     *     WorkDocsConfiguration?: WorkDocsConfiguration,
     *     FsxConfiguration?: FsxConfiguration,
     *     SlackConfiguration?: SlackConfiguration,
     *     BoxConfiguration?: BoxConfiguration,
     *     QuipConfiguration?: QuipConfiguration,
     *     JiraConfiguration?: JiraConfiguration,
     *     GitHubConfiguration?: GitHubConfiguration,
     *     AlfrescoConfiguration?: AlfrescoConfiguration,
     *     TemplateConfiguration?: TemplateConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
