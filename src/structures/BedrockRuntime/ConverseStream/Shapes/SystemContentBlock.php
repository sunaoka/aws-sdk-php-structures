<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $text
 * @property GuardrailConverseContentBlock|null $guardContent
 */
class SystemContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string|null,
     *     guardContent?: GuardrailConverseContentBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
