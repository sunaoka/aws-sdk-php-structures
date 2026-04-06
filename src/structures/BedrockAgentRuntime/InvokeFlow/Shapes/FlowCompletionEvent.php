<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS'|'INPUT_REQUIRED' $completionReason
 */
class FlowCompletionEvent extends Shape
{
    /**
     * @param array{completionReason: 'SUCCESS'|'INPUT_REQUIRED'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
