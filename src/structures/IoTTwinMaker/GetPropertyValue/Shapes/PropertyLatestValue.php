<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityPropertyReference $propertyReference
 * @property DataValue|null $propertyValue
 */
class PropertyLatestValue extends Shape
{
    /**
     * @param array{
     *     propertyReference: EntityPropertyReference,
     *     propertyValue?: DataValue|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
