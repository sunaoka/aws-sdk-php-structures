<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\IngestData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<IngestPayloadType> $payload
 */
class InlineMemoryContent extends Shape
{
    /**
     * @param array{payload: list<IngestPayloadType>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
