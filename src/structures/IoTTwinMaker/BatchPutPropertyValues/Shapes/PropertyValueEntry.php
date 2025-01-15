<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\BatchPutPropertyValues\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityPropertyReference $entityPropertyReference
 * @property list<PropertyValue>|null $propertyValues
 */
class PropertyValueEntry extends Shape
{
    /**
     * @param array{
     *     entityPropertyReference: EntityPropertyReference,
     *     propertyValues?: list<PropertyValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
