<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultContent $content
 * @property RetrievalResultLocation $location
 * @property array<string, RetrievalResultMetadataValue> $metadata
 * @property double $score
 */
class KnowledgeBaseRetrievalResult extends Shape
{
    /**
     * @param array{
     *     content: RetrievalResultContent,
     *     location?: RetrievalResultLocation,
     *     metadata?: array<string, RetrievalResultMetadataValue>,
     *     score?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
