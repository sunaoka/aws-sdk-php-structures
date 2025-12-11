<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property Document|null $json
 */
class ToolResultBlockDelta extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     json?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
