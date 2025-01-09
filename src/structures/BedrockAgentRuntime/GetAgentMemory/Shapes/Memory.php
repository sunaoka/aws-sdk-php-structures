<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\GetAgentMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemorySessionSummary $sessionSummary
 */
class Memory extends Shape
{
    /**
     * @param array{sessionSummary?: MemorySessionSummary} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
