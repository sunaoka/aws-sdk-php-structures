<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeCodeInterpreter\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $message
 */
class ValidationExceptionField extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
