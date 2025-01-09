<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OrchestrationExecutor $executor
 */
class CustomOrchestration extends Shape
{
    /**
     * @param array{executor?: OrchestrationExecutor} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
