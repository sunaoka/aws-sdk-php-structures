<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|null $action
 * @property string|null $name
 * @property 'DENY'|null $type
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|null,
     *     name?: string|null,
     *     type?: 'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
