<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $invocationId
 * @property list<InvocationInputMember>|null $invocationInputs
 */
class ReturnControlPayload extends Shape
{
    /**
     * @param array{
     *     invocationId?: string|null,
     *     invocationInputs?: list<InvocationInputMember>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
