<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND'|null $LogicalOperator
 * @property list<PropertyFilter>|null $Properties
 */
class PropertyFilters extends Shape
{
    /**
     * @param array{
     *     LogicalOperator?: 'AND'|null,
     *     Properties?: list<PropertyFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
