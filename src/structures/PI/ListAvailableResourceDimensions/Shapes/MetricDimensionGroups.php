<?php

namespace Sunaoka\Aws\Structures\PI\ListAvailableResourceDimensions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Metric
 * @property list<DimensionGroupDetail> $Groups
 */
class MetricDimensionGroups extends Shape
{
    /**
     * @param array{
     *     Metric?: string,
     *     Groups?: list<DimensionGroupDetail>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
