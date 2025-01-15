<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SHAREPOINT_2013'|'SHAREPOINT_2016'|'SHAREPOINT_ONLINE'|'SHAREPOINT_2019' $SharePointVersion
 * @property list<string> $Urls
 * @property string $SecretArn
 * @property bool|null $CrawlAttachments
 * @property bool|null $UseChangeLog
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 * @property list<DataSourceToIndexFieldMapping>|null $FieldMappings
 * @property string|null $DocumentTitleFieldName
 * @property bool|null $DisableLocalGroups
 * @property S3Path|null $SslCertificateS3Path
 * @property 'HTTP_BASIC'|'OAUTH2'|null $AuthenticationType
 * @property ProxyConfiguration|null $ProxyConfiguration
 */
class SharePointConfiguration extends Shape
{
    /**
     * @param array{
     *     SharePointVersion: 'SHAREPOINT_2013'|'SHAREPOINT_2016'|'SHAREPOINT_ONLINE'|'SHAREPOINT_2019',
     *     Urls: list<string>,
     *     SecretArn: string,
     *     CrawlAttachments?: bool|null,
     *     UseChangeLog?: bool|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null,
     *     FieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     DocumentTitleFieldName?: string|null,
     *     DisableLocalGroups?: bool|null,
     *     SslCertificateS3Path?: S3Path|null,
     *     AuthenticationType?: 'HTTP_BASIC'|'OAUTH2'|null,
     *     ProxyConfiguration?: ProxyConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
