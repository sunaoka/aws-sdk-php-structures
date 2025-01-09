<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RetrievalResultContent $content
 * @property RetrievalResultLocation $location
 * @property array<string, RetrievalResultMetadataValue> $metadata
 */
class RetrievedReference extends Shape
{
    /**
     * @param array{
     *     content?: RetrievalResultContent,
     *     location?: RetrievalResultLocation,
     *     metadata?: array<string, RetrievalResultMetadataValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
