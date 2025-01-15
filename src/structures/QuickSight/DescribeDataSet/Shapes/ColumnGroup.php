<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeoSpatialColumnGroup|null $GeoSpatialColumnGroup
 */
class ColumnGroup extends Shape
{
    /**
     * @param array{GeoSpatialColumnGroup?: GeoSpatialColumnGroup|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
