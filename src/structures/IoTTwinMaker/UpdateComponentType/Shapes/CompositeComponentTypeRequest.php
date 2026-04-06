<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\UpdateComponentType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $componentTypeId
 */
class CompositeComponentTypeRequest extends Shape
{
    /**
     * @param array{componentTypeId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
