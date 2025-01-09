<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED' $action
 * @property string $name
 * @property 'DENY' $type
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED',
     *     name?: string,
     *     type?: 'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
