<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $CrawlAttachments
 * @property list<ConfluenceAttachmentToIndexFieldMapping>|null $AttachmentFieldMappings
 */
class ConfluenceAttachmentConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlAttachments?: bool|null,
     *     AttachmentFieldMappings?: list<ConfluenceAttachmentToIndexFieldMapping>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
