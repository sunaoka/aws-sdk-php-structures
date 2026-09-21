<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HarnessBeforeInvocationHook|null $beforeInvocation
 * @property HarnessAfterInvocationHook|null $afterInvocation
 * @property HarnessBeforeToolCallHook|null $beforeToolCall
 * @property HarnessAfterToolCallHook|null $afterToolCall
 */
class HarnessHook extends Shape
{
    /**
     * @param array{
     *     beforeInvocation?: HarnessBeforeInvocationHook|null,
     *     afterInvocation?: HarnessAfterInvocationHook|null,
     *     beforeToolCall?: HarnessBeforeToolCallHook|null,
     *     afterToolCall?: HarnessAfterToolCallHook|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
