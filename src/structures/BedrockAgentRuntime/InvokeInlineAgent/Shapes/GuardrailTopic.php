<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property 'DENY'|null $type
 * @property 'BLOCKED'|null $action
 */
class GuardrailTopic extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     type?: 'DENY'|null,
     *     action?: 'BLOCKED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
