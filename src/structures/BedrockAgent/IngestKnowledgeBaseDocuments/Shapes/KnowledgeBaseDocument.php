<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentContent $content
 * @property DocumentMetadata $metadata
 */
class KnowledgeBaseDocument extends Shape
{
    /**
     * @param array{
     *     content: DocumentContent,
     *     metadata?: DocumentMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
