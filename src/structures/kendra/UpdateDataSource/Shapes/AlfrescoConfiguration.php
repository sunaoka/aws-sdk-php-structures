<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SiteUrl
 * @property string $SiteId
 * @property string $SecretArn
 * @property S3Path $SslCertificateS3Path
 * @property bool $CrawlSystemFolders
 * @property bool $CrawlComments
 * @property list<'wiki'|'blog'|'documentLibrary'> $EntityFilter
 * @property list<DataSourceToIndexFieldMapping> $DocumentLibraryFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $BlogFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $WikiFieldMappings
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 */
class AlfrescoConfiguration extends Shape
{
    /**
     * @param array{
     *     SiteUrl: string,
     *     SiteId: string,
     *     SecretArn: string,
     *     SslCertificateS3Path: S3Path,
     *     CrawlSystemFolders?: bool,
     *     CrawlComments?: bool,
     *     EntityFilter?: list<'wiki'|'blog'|'documentLibrary'>,
     *     DocumentLibraryFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     BlogFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     WikiFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     InclusionPatterns?: list<string>,
     *     ExclusionPatterns?: list<string>,
     *     VpcConfiguration?: DataSourceVpcConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
