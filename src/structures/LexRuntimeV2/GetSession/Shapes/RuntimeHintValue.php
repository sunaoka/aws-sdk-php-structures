<?php

namespace Sunaoka\Aws\Structures\LexRuntimeV2\GetSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $phrase
 */
class RuntimeHintValue extends Shape
{
    /**
     * @param array{phrase: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
