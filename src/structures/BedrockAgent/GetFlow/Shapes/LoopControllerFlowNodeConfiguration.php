<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\GetFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FlowCondition $continueCondition
 * @property int<1, 1000>|null $maxIterations
 */
class LoopControllerFlowNodeConfiguration extends Shape
{
    /**
     * @param array{
     *     continueCondition: FlowCondition,
     *     maxIterations?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
