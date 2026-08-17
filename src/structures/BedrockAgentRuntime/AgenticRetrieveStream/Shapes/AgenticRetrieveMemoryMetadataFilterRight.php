<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\AgenticRetrieveStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AgenticRetrieveMemoryMetadataValue|null $metadataValue
 */
class AgenticRetrieveMemoryMetadataFilterRight extends Shape
{
    /**
     * @param array{metadataValue?: AgenticRetrieveMemoryMetadataValue|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
