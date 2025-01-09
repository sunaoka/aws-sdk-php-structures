<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationInput $modelInvocationInput
 * @property PostProcessingModelInvocationOutput $modelInvocationOutput
 */
class PostProcessingTrace extends Shape
{
    /**
     * @param array{
     *     modelInvocationInput?: ModelInvocationInput,
     *     modelInvocationOutput?: PostProcessingModelInvocationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
