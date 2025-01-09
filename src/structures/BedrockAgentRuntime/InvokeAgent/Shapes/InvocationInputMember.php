<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiInvocationInput $apiInvocationInput
 * @property FunctionInvocationInput $functionInvocationInput
 */
class InvocationInputMember extends Shape
{
    /**
     * @param array{
     *     apiInvocationInput?: ApiInvocationInput,
     *     functionInvocationInput?: FunctionInvocationInput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
