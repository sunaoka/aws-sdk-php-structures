<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvocationInput|null $invocationInput
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property OrchestrationModelInvocationOutput|null $modelInvocationOutput
 * @property Observation|null $observation
 * @property Rationale|null $rationale
 */
class OrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     invocationInput?: InvocationInput|null,
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: OrchestrationModelInvocationOutput|null,
     *     observation?: Observation|null,
     *     rationale?: Rationale|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
