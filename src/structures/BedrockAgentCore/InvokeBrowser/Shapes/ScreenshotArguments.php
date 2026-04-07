<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeBrowser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PNG'|null $format
 */
class ScreenshotArguments extends Shape
{
    /**
     * @param array{format?: 'PNG'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
