<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultContent $content
 * @property RetrievalResultLocation|null $location
 * @property array<string, RetrievalResultMetadataValue>|null $metadata
 * @property double|null $score
 */
class KnowledgeBaseRetrievalResult extends Shape
{
    /**
     * @param array{
     *     content: RetrievalResultContent,
     *     location?: RetrievalResultLocation|null,
     *     metadata?: array<string, RetrievalResultMetadataValue>|null,
     *     score?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
