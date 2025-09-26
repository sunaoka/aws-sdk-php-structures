<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $match
 * @property 'PROFANITY'|null $type
 * @property 'BLOCKED'|null $action
 */
class GuardrailManagedWord extends Shape
{
    /**
     * @param array{
     *     match?: string|null,
     *     type?: 'PROFANITY'|null,
     *     action?: 'BLOCKED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
