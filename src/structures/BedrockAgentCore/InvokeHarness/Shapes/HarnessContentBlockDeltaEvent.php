<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $contentBlockIndex
 * @property HarnessContentBlockDelta $delta
 */
class HarnessContentBlockDeltaEvent extends Shape
{
    /**
     * @param array{
     *     contentBlockIndex: int,
     *     delta: HarnessContentBlockDelta
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
