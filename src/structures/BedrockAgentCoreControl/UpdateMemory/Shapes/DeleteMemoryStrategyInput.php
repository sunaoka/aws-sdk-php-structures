<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $memoryStrategyId
 */
class DeleteMemoryStrategyInput extends Shape
{
    /**
     * @param array{memoryStrategyId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
