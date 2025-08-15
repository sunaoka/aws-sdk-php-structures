<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\IngestKnowledgeBaseDocuments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DocumentMetadata|null $metadata
 * @property DocumentContent $content
 */
class KnowledgeBaseDocument extends Shape
{
    /**
     * @param array{
     *     metadata?: DocumentMetadata|null,
     *     content: DocumentContent
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
