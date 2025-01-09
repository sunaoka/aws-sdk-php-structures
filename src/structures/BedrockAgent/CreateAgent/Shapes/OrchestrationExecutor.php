<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $lambda
 */
class OrchestrationExecutor extends Shape
{
    /**
     * @param array{lambda?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
