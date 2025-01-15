<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValueHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EntityPropertyReference $entityPropertyReference
 * @property list<PropertyValue>|null $values
 */
class PropertyValueHistory extends Shape
{
    /**
     * @param array{
     *     entityPropertyReference: EntityPropertyReference,
     *     values?: list<PropertyValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
