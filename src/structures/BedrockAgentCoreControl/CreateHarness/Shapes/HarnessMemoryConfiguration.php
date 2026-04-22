<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessAgentCoreMemoryConfiguration|null $agentCoreMemoryConfiguration
 */
class HarnessMemoryConfiguration extends Shape
{
    /**
     * @param array{agentCoreMemoryConfiguration?: HarnessAgentCoreMemoryConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
