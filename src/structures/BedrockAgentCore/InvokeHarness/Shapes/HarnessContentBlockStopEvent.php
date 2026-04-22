<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $contentBlockIndex
 */
class HarnessContentBlockStopEvent extends Shape
{
    /**
     * @param array{contentBlockIndex: int} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
