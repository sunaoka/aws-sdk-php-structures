<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $SecretArn
 * @property bool $CrawlFileComments
 * @property bool $CrawlChatRooms
 * @property bool $CrawlAttachments
 * @property list<string> $FolderIds
 * @property list<DataSourceToIndexFieldMapping> $ThreadFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $MessageFieldMappings
 * @property list<DataSourceToIndexFieldMapping> $AttachmentFieldMappings
 * @property list<string> $InclusionPatterns
 * @property list<string> $ExclusionPatterns
 * @property DataSourceVpcConfiguration $VpcConfiguration
 */
class QuipConfiguration extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     SecretArn: string,
     *     CrawlFileComments?: bool,
     *     CrawlChatRooms?: bool,
     *     CrawlAttachments?: bool,
     *     FolderIds?: list<string>,
     *     ThreadFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     MessageFieldMappings?: list<DataSourceToIndexFieldMapping>,
     *     AttachmentFieldMappings?: list<DataSourceToIndexFieldMapping>,
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
