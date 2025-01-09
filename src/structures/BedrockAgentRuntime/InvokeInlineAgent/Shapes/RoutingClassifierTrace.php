<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvocationInput $invocationInput
 * @property ModelInvocationInput $modelInvocationInput
 * @property RoutingClassifierModelInvocationOutput $modelInvocationOutput
 * @property Observation $observation
 */
class RoutingClassifierTrace extends Shape
{
    /**
     * @param array{
     *     invocationInput?: InvocationInput,
     *     modelInvocationInput?: ModelInvocationInput,
     *     modelInvocationOutput?: RoutingClassifierModelInvocationOutput,
     *     observation?: Observation
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
