<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultContent $content
 * @property RetrievalResultLocation|null $location
 * @property double|null $score
 * @property array<string, RetrievalResultMetadataValue>|null $metadata
 */
class KnowledgeBaseRetrievalResult extends Shape
{
    /**
     * @param array{
     *     content: RetrievalResultContent,
     *     location?: RetrievalResultLocation|null,
     *     score?: double|null,
     *     metadata?: array<string, RetrievalResultMetadataValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
