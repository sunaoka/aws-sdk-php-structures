<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessAgentCoreMemoryConfiguration|null $agentCoreMemoryConfiguration
 * @property HarnessManagedMemoryConfiguration|null $managedMemoryConfiguration
 * @property HarnessDisabledMemoryConfiguration|null $disabled
 */
class HarnessMemoryConfiguration extends Shape
{
    /**
     * @param array{
     *     agentCoreMemoryConfiguration?: HarnessAgentCoreMemoryConfiguration|null,
     *     managedMemoryConfiguration?: HarnessManagedMemoryConfiguration|null,
     *     disabled?: HarnessDisabledMemoryConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
