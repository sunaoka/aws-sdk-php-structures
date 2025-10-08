<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $document
 */
class FlowExecutionContent extends Shape
{
    /**
     * @param array{document?: Document|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
