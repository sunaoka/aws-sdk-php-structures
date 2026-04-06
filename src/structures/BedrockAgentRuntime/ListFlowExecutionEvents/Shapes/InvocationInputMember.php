<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiInvocationInput|null $apiInvocationInput
 * @property FunctionInvocationInput|null $functionInvocationInput
 */
class InvocationInputMember extends Shape
{
    /**
     * @param array{
     *     apiInvocationInput?: ApiInvocationInput|null,
     *     functionInvocationInput?: FunctionInvocationInput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
