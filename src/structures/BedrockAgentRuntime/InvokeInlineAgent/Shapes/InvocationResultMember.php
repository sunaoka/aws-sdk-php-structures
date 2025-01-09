<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiResult $apiResult
 * @property FunctionResult $functionResult
 */
class InvocationResultMember extends Shape
{
    /**
     * @param array{
     *     apiResult?: ApiResult,
     *     functionResult?: FunctionResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
