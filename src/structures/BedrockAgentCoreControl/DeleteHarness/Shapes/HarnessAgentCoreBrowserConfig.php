<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteHarness\Shapes;

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
