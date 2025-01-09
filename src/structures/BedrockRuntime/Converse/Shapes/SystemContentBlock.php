<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property GuardrailConverseContentBlock $guardContent
 */
class SystemContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: string,
     *     guardContent?: GuardrailConverseContentBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
