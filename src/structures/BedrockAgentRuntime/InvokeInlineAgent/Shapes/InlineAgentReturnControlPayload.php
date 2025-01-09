<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $invocationId
 * @property list<InvocationInputMember> $invocationInputs
 */
class InlineAgentReturnControlPayload extends Shape
{
    /**
     * @param array{
     *     invocationId?: string,
     *     invocationInputs?: list<InvocationInputMember>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
