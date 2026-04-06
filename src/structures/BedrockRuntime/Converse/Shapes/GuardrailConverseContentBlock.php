<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GuardrailConverseTextBlock|null $text
 */
class GuardrailConverseContentBlock extends Shape
{
    /**
     * @param array{text?: GuardrailConverseTextBlock|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
