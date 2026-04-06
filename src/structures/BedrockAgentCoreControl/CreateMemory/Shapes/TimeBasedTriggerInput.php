<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<10, 3000>|null $idleSessionTimeout
 */
class TimeBasedTriggerInput extends Shape
{
    /**
     * @param array{idleSessionTimeout?: int<10, 3000>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
