<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class InternalServerException extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
