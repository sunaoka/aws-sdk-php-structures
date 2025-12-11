<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateMemory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<TriggerConditionInput>|null $triggerConditions
 * @property ModifyInvocationConfigurationInput|null $invocationConfiguration
 * @property int<0, 50>|null $historicalContextWindowSize
 */
class ModifySelfManagedConfiguration extends Shape
{
    /**
     * @param array{
     *     triggerConditions?: list<TriggerConditionInput>|null,
     *     invocationConfiguration?: ModifyInvocationConfigurationInput|null,
     *     historicalContextWindowSize?: int<0, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
