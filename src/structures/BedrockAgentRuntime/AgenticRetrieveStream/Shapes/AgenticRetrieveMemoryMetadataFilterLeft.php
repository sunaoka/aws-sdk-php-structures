<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $metadataKey
 */
class AgenticRetrieveMemoryMetadataFilterLeft extends Shape
{
    /**
     * @param array{metadataKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
