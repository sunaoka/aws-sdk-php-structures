<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Document $document
 */
class FlowOutputContent extends Shape
{
    /**
     * @param array{document?: Document} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
