<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property GeoSpatialColumnGroup $GeoSpatialColumnGroup
 */
class ColumnGroup extends Shape
{
    /**
     * @param array{GeoSpatialColumnGroup?: GeoSpatialColumnGroup} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
