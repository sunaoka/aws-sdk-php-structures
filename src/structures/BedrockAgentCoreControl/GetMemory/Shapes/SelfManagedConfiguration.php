<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TriggerCondition> $triggerConditions
 * @property InvocationConfiguration $invocationConfiguration
 * @property int $historicalContextWindowSize
 */
class SelfManagedConfiguration extends Shape
{
    /**
     * @param array{
     *     triggerConditions: list<TriggerCondition>,
     *     invocationConfiguration: InvocationConfiguration,
     *     historicalContextWindowSize: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
