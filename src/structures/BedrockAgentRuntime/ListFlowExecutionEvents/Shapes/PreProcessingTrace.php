<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property PreProcessingModelInvocationOutput|null $modelInvocationOutput
 */
class PreProcessingTrace extends Shape
{
    /**
     * @param array{
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: PreProcessingModelInvocationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
