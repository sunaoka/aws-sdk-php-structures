<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\ListFlowExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvocationInput|null $invocationInput
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property RoutingClassifierModelInvocationOutput|null $modelInvocationOutput
 * @property Observation|null $observation
 */
class RoutingClassifierTrace extends Shape
{
    /**
     * @param array{
     *     invocationInput?: InvocationInput|null,
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: RoutingClassifierModelInvocationOutput|null,
     *     observation?: Observation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
