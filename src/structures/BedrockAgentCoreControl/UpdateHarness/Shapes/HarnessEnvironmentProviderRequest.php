<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessAgentCoreRuntimeEnvironmentRequest|null $agentCoreRuntimeEnvironment
 */
class HarnessEnvironmentProviderRequest extends Shape
{
    /**
     * @param array{agentCoreRuntimeEnvironment?: HarnessAgentCoreRuntimeEnvironmentRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
