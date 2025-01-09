<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BLOCKED' $action
 * @property string $match
 * @property 'PROFANITY' $type
 */
class GuardrailManagedWord extends Shape
{
    /**
     * @param array{
     *     action?: 'BLOCKED',
     *     match?: string,
     *     type?: 'PROFANITY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
