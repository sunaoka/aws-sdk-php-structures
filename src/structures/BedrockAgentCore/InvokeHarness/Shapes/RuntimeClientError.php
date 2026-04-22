<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 */
class RuntimeClientError extends Shape
{
    /**
     * @param array{message?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
