<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|null $action
 * @property string|null $match
 */
class GuardrailCustomWord extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|null,
     *     match?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
