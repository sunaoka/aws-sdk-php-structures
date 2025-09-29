<?php

namespace Sunaoka\Aws\Structures\BedrockAgentRuntime\InvokeInlineAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InvocationInput|null $invocationInput
 * @property Observation|null $observation
 * @property ModelInvocationInput|null $modelInvocationInput
 * @property RoutingClassifierModelInvocationOutput|null $modelInvocationOutput
 */
class RoutingClassifierTrace extends Shape
{
    /**
     * @param array{
     *     invocationInput?: InvocationInput|null,
     *     observation?: Observation|null,
     *     modelInvocationInput?: ModelInvocationInput|null,
     *     modelInvocationOutput?: RoutingClassifierModelInvocationOutput|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
