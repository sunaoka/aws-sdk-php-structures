<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $propertyName
 * @property string|null $operator
 * @property DataValue|null $value
 */
class PropertyFilter extends Shape
{
    /**
     * @param array{
     *     propertyName?: string|null,
     *     operator?: string|null,
     *     value?: DataValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
