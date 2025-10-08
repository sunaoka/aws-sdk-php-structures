<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property PostProcessingModelInvocationOutput|null $modelInvocationOutput
 */
class PostProcessingTrace extends Shape
{
    /**
     * @param array{
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: PostProcessingModelInvocationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
