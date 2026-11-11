<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleHook|null $warmup
 */
class BuildLifecycleHooks extends Shape
{
    /**
     * @param array{warmup?: LifecycleHook|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
