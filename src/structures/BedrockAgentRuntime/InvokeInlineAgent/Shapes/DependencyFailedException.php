<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $message
 * @property string|null $resourceName
 */
class DependencyFailedException extends Shape
{
    /**
     * @param array{
     *     message?: string|null,
     *     resourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
