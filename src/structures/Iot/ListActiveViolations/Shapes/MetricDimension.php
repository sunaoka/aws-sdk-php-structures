<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $dimensionName
 * @property 'IN'|'NOT_IN'|null $operator
 */
class MetricDimension extends Shape
{
    /**
     * @param array{
     *     dimensionName: string,
     *     operator?: 'IN'|'NOT_IN'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
