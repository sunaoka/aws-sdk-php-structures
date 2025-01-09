<?php

namespace Sunaoka\Aws\Structures\LexModelBuildingService\PutIntent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $defaultValue
 */
class SlotDefaultValue extends Shape
{
    /**
     * @param array{defaultValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
