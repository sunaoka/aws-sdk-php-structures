<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $idleSessionTimeout
 */
class TimeBasedTrigger extends Shape
{
    /**
     * @param array{idleSessionTimeout?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
