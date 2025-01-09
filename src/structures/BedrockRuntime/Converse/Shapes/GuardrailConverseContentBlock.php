<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConverseTextBlock $text
 * @property GuardrailConverseImageBlock $image
 */
class GuardrailConverseContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: GuardrailConverseTextBlock,
     *     image?: GuardrailConverseImageBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
