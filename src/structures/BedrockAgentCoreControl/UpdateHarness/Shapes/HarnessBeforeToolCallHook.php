<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property HarnessHookTarget $target
 */
class HarnessBeforeToolCallHook extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     target: HarnessHookTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
