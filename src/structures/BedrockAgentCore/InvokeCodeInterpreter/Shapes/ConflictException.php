<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class ConflictException extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
