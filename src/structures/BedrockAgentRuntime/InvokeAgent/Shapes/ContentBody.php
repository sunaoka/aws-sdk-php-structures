<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $body
 */
class ContentBody extends Shape
{
    /**
     * @param array{body?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
