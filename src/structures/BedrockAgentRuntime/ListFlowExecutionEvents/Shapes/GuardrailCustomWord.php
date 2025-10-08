<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $match
 * @property 'BLOCKED'|null $action
 */
class GuardrailCustomWord extends Shape
{
    /**
     * @param array{
     *     match?: string|null,
     *     action?: 'BLOCKED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
