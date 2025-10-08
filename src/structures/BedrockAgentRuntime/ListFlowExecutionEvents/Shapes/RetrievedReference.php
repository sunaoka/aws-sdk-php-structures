<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultContent|null $content
 * @property RetrievalResultLocation|null $location
 * @property array<string, RetrievalResultMetadataValue>|null $metadata
 */
class RetrievedReference extends Shape
{
    /**
     * @param array{
     *     content?: RetrievalResultContent|null,
     *     location?: RetrievalResultLocation|null,
     *     metadata?: array<string, RetrievalResultMetadataValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
