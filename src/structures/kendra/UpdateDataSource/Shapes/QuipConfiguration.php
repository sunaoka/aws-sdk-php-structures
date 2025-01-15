<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Domain
 * @property string $SecretArn
 * @property bool|null $CrawlFileComments
 * @property bool|null $CrawlChatRooms
 * @property bool|null $CrawlAttachments
 * @property list<string>|null $FolderIds
 * @property list<DataSourceToIndexFieldMapping>|null $ThreadFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $MessageFieldMappings
 * @property list<DataSourceToIndexFieldMapping>|null $AttachmentFieldMappings
 * @property list<string>|null $InclusionPatterns
 * @property list<string>|null $ExclusionPatterns
 * @property DataSourceVpcConfiguration|null $VpcConfiguration
 */
class QuipConfiguration extends Shape
{
    /**
     * @param array{
     *     Domain: string,
     *     SecretArn: string,
     *     CrawlFileComments?: bool|null,
     *     CrawlChatRooms?: bool|null,
     *     CrawlAttachments?: bool|null,
     *     FolderIds?: list<string>|null,
     *     ThreadFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     MessageFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
     *     AttachmentFieldMappings?: list<DataSourceToIndexFieldMapping>|null,
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
