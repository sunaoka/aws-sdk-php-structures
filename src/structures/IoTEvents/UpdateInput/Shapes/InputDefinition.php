<?php

namespace Sunaoka\Aws\Structures\IoTEvents\UpdateInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Attribute> $attributes
 */
class InputDefinition extends Shape
{
    /**
     * @param array{attributes: list<Attribute>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
