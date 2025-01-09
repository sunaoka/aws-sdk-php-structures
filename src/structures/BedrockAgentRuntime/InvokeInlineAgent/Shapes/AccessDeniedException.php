<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 */
class AccessDeniedException extends Shape
{
    /**
     * @param array{message?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
