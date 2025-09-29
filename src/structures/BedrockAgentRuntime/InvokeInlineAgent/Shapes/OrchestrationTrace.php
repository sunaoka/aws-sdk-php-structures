<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Rationale|null $rationale
 * @property InvocationInput|null $invocationInput
 * @property Observation|null $observation
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property OrchestrationModelInvocationOutput|null $modelInvocationOutput
 */
class OrchestrationTrace extends Shape
{
    /**
     * @param array{
     *     rationale?: Rationale|null,
     *     invocationInput?: InvocationInput|null,
     *     observation?: Observation|null,
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: OrchestrationModelInvocationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
