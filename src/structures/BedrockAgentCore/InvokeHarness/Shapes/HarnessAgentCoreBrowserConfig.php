<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeHarness\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $browserArn
 */
class HarnessAgentCoreBrowserConfig extends Shape
{
    /**
     * @param array{browserArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
