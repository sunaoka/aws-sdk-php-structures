<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $input
 */
class HarnessToolUseBlockDelta extends Shape
{
    /**
     * @param array{input: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
