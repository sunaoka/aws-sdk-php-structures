<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SiteUrl
 * @property string $SiteId
 * @property string $SecretArn
 * @property S3Path $SslCertificateS3Path
 * @property bool|null $CrawlSystemFolders
 * @property bool|null $CrawlComments
 * @property list<'wiki'|'blog'|'documentLibrary'>|null $EntityFilter
 * @property list<DataSourceToIndexFieldMapping>|null $DocumentLibraryFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $BlogFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $WikiFieldMappings
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 */
class AlfrescoConfiguration extends Shape
{
    /**
     * @param array{
     *     SiteUrl: string,
     *     SiteId: string,
     *     SecretArn: string,
     *     SslCertificateS3Path: S3Path,
     *     CrawlSystemFolders?: bool|null,
     *     CrawlComments?: bool|null,
     *     EntityFilter?: list<'wiki'|'blog'|'documentLibrary'>|null,
     *     DocumentLibraryFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     BlogFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     WikiFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     InclusionPatterns?: list<string>|null,
     *     ExclusionPatterns?: list<string>|null,
     *     VpcConfiguration?: DataSourceVpcConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
