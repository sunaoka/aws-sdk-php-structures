<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $propertyName
 * @property string $operator
 * @property DataValue $value
 */
class PropertyFilter extends Shape
{
    /**
     * @param array{
     *     propertyName?: string,
     *     operator?: string,
     *     value?: DataValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
