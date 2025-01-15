<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Metric
 * @property list<DimensionGroupDetail>|null $Groups
 */
class MetricDimensionGroups extends Shape
{
    /**
     * @param array{
     *     Metric?: string|null,
     *     Groups?: list<DimensionGroupDetail>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
