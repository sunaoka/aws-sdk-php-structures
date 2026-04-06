<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<100, 500000>|null $tokenCount
 */
class TokenBasedTriggerInput extends Shape
{
    /**
     * @param array{tokenCount?: int<100, 500000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
