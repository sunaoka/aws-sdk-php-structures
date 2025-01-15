<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED'|null $action
 * @property string|null $match
 * @property 'PROFANITY'|null $type
 */
class GuardrailManagedWord extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED'|null,
     *     match?: string|null,
     *     type?: 'PROFANITY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
