<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KinesisResource|null $kinesis
 */
class StreamDeliveryResource extends Shape
{
    /**
     * @param array{kinesis?: KinesisResource|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
