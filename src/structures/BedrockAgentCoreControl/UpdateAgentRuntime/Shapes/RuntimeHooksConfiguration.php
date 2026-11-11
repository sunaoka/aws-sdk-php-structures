<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BuildLifecycleHooks|null $build
 */
class RuntimeHooksConfiguration extends Shape
{
    /**
     * @param array{build?: BuildLifecycleHooks|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
