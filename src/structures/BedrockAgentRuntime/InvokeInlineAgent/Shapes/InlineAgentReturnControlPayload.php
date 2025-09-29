<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InvocationInputMember>|null $invocationInputs
 * @property string|null $invocationId
 */
class InlineAgentReturnControlPayload extends Shape
{
    /**
     * @param array{
     *     invocationInputs?: list<InvocationInputMember>|null,
     *     invocationId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
