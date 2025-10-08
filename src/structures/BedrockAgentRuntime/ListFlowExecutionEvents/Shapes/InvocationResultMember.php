<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ApiResult|null $apiResult
 * @property FunctionResult|null $functionResult
 */
class InvocationResultMember extends Shape
{
    /**
     * @param array{
     *     apiResult?: ApiResult|null,
     *     functionResult?: FunctionResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
