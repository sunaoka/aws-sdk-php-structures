<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ASCENDING'|'DESCENDING'|null $order
 * @property string $propertyName
 */
class OrderBy extends Shape
{
    /**
     * @param array{
     *     order?: 'ASCENDING'|'DESCENDING'|null,
     *     propertyName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
