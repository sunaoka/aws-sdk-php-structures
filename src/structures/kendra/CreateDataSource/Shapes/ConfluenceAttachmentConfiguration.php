<?php

namespace Sunaoka\Aws\Structures\kendra\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $CrawlAttachments
 * @property list<ConfluenceAttachmentToIndexFieldMapping> $AttachmentFieldMappings
 */
class ConfluenceAttachmentConfiguration extends Shape
{
    /**
     * @param array{
     *     CrawlAttachments?: bool,
     *     AttachmentFieldMappings?: list<ConfluenceAttachmentToIndexFieldMapping>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
