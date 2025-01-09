<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\GetBuiltinIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 */
class BuiltinIntentSlot extends Shape
{
    /**
     * @param array{name?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
