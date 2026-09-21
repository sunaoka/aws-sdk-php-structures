<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $hookEventId
 * @property string $name
 * @property 'before_tool_call'|'after_tool_call'|'before_invocation'|'after_invocation' $type
 * @property 'allow'|'deny'|null $decision
 * @property string|null $reason
 */
class HarnessHookEvent extends Shape
{
    /**
     * @param array{
     *     hookEventId: string,
     *     name: string,
     *     type: 'before_tool_call'|'after_tool_call'|'before_invocation'|'after_invocation',
     *     decision?: 'allow'|'deny'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
