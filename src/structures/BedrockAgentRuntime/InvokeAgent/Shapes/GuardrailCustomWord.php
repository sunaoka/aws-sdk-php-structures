<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED' $action
 * @property string $match
 */
class GuardrailCustomWord extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED',
     *     match?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
