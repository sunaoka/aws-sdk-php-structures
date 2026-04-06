<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SUCCESS' $completionReason
 */
class FlowCompletionEvent extends Shape
{
    /**
     * @param array{completionReason: 'SUCCESS'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
