<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $contentBlockIndex
 * @property HarnessContentBlockStart $start
 */
class HarnessContentBlockStartEvent extends Shape
{
    /**
     * @param array{
     *     contentBlockIndex: int,
     *     start: HarnessContentBlockStart
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
