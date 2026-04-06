<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $conditionName
 */
class FlowTraceCondition extends Shape
{
    /**
     * @param array{conditionName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
