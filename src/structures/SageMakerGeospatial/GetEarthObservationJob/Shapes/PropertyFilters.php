<?php

namespace Sunaoka\Aws\Structures\SageMakerGeospatial\GetEarthObservationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AND' $LogicalOperator
 * @property list<PropertyFilter> $Properties
 */
class PropertyFilters extends Shape
{
    /**
     * @param array{
     *     LogicalOperator?: 'AND',
     *     Properties?: list<PropertyFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
