<?php

namespace Sunaoka\Aws\Structures\kendra\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHAREPOINT_2013'|'SHAREPOINT_2016'|'SHAREPOINT_ONLINE'|'SHAREPOINT_2019' $SharePointVersion
 * @property list<string> $Urls
 * @property string $SecretArn
 * @property bool $CrawlAttachments
 * @property bool $UseChangeLog
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 * @property list<DataSourceToIndexFieldMapping> $FieldMappings
 * @property string $DocumentTitleFieldName
 * @property bool $DisableLocalGroups
 * @property S3Path $SslCertificateS3Path
 * @property 'HTTP_BASIC'|'OAUTH2' $AuthenticationType
 * @property ProxyConfiguration $ProxyConfiguration
 */
class SharePointConfiguration extends Shape
{
    /**
     * @param array{
     *     SharePointVersion: 'SHAREPOINT_2013'|'SHAREPOINT_2016'|'SHAREPOINT_ONLINE'|'SHAREPOINT_2019',
     *     Urls: list<string>,
     *     SecretArn: string,
     *     CrawlAttachments?: bool,
     *     UseChangeLog?: bool,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     VpcConfiguration?: DataSourceVpcConfiguration,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     DocumentTitleFieldName?: string,
     *     DisableLocalGroups?: bool,
     *     SslCertificateS3Path?: S3Path,
     *     AuthenticationType?: 'HTTP_BASIC'|'OAUTH2',
     *     ProxyConfiguration?: ProxyConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
