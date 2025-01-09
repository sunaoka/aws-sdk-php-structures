<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ModelInvocationInput $modelInvocationInput
 * @property PreProcessingModelInvocationOutput $modelInvocationOutput
 */
class PreProcessingTrace extends Shape
{
    /**
     * @param array{
     *     modelInvocationInput?: ModelInvocationInput,
     *     modelInvocationOutput?: PreProcessingModelInvocationOutput
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
