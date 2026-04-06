<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\CountTokens\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConverseTextBlock|null $text
 * @property GuardrailConverseImageBlock|null $image
 */
class GuardrailConverseContentBlock extends Shape
{
    /**
     * @param array{
     *     text?: GuardrailConverseTextBlock|null,
     *     image?: GuardrailConverseImageBlock|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
