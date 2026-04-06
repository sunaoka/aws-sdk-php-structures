<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ApplyGuardrail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailTextBlock|null $text
 * @property GuardrailImageBlock|null $image
 */
class GuardrailContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: GuardrailTextBlock|null,
     *     image?: GuardrailImageBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
