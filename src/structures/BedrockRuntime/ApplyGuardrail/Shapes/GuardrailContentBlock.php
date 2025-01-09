<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTextBlock $text
 * @property GuardrailImageBlock $image
 */
class GuardrailContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: GuardrailTextBlock,
     *     image?: GuardrailImageBlock
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
