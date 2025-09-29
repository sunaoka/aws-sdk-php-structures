<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InvocationInputMember>|null $invocationInputs
 * @property string|null $invocationId
 */
class ReturnControlPayload extends Shape
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
