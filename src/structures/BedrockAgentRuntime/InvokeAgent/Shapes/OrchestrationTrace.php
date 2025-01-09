<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvocationInput $invocationInput
 * @property ModelInvocationInput $modelInvocationInput
 * @property OrchestrationModelInvocationOutput $modelInvocationOutput
 * @property Observation $observation
 * @property Rationale $rationale
 */
class OrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     invocationInput?: InvocationInput,
     *     modelInvocationInput?: ModelInvocationInput,
     *     modelInvocationOutput?: OrchestrationModelInvocationOutput,
     *     observation?: Observation,
     *     rationale?: Rationale
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
