<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessAgentCoreRuntimeEnvironment|null $agentCoreRuntimeEnvironment
 */
class HarnessEnvironmentProvider extends Shape
{
    /**
     * @param array{agentCoreRuntimeEnvironment?: HarnessAgentCoreRuntimeEnvironment|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
