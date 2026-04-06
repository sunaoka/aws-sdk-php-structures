<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentContent $content
 * @property DocumentMetadata|null $metadata
 */
class KnowledgeBaseDocument extends Shape
{
    /**
     * @param array{
     *     content: DocumentContent,
     *     metadata?: DocumentMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
