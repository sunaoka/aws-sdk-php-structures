<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\Converse\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bytes
 */
class GuardrailConverseImageSource extends Shape
{
    /**
     * @param array{bytes?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
