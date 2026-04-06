<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TriggerConditionInput>|null $triggerConditions
 * @property InvocationConfigurationInput $invocationConfiguration
 * @property int<0, 50>|null $historicalContextWindowSize
 */
class SelfManagedConfigurationInput extends Shape
{
    /**
     * @param array{
     *     triggerConditions?: list<TriggerConditionInput>|null,
     *     invocationConfiguration: InvocationConfigurationInput,
     *     historicalContextWindowSize?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
