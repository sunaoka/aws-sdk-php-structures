<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<OrderBy> $orderBy
 * @property list<PropertyFilter> $propertyFilters
 */
class TabularConditions extends Shape
{
    /**
     * @param array{
     *     orderBy?: list<OrderBy>,
     *     propertyFilters?: list<PropertyFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
