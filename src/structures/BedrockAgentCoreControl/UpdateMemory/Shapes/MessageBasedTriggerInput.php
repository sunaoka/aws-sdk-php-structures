<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 50>|null $messageCount
 */
class MessageBasedTriggerInput extends Shape
{
    /**
     * @param array{messageCount?: int<1, 50>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
