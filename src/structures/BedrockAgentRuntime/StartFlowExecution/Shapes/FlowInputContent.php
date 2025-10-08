<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\StartFlowExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document|null $document
 */
class FlowInputContent extends Shape
{
    /**
     * @param array{document?: Document|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
