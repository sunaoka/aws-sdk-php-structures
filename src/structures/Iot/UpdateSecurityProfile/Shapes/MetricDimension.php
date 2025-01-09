<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateSecurityProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionName
 * @property 'IN'|'NOT_IN' $operator
 */
class MetricDimension extends Shape
{
    /**
     * @param array{
     *     dimensionName: string,
     *     operator?: 'IN'|'NOT_IN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
