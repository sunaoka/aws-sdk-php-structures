<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class ThrottlingException extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
