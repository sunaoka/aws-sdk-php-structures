<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateAgentRuntime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LifecycleHookAction $action
 */
class LifecycleHook extends Shape
{
    /**
     * @param array{action: LifecycleHookAction} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
