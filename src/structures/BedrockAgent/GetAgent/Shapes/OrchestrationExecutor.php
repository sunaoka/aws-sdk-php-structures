<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $lambda
 */
class OrchestrationExecutor extends Shape
{
    /**
     * @param array{lambda?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
