<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OrderBy>|null $orderBy
 * @property list<PropertyFilter>|null $propertyFilters
 */
class TabularConditions extends Shape
{
    /**
     * @param array{
     *     orderBy?: list<OrderBy>|null,
     *     propertyFilters?: list<PropertyFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
