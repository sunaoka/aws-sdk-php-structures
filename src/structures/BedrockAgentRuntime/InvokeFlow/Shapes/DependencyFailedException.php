<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $message
 * @property string $resourceName
 */
class DependencyFailedException extends Shape
{
    /**
     * @param array{
     *     message?: string,
     *     resourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
