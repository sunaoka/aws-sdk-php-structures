<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RowLevelPermissionTagConfiguration|null $TagConfiguration
 * @property RowLevelPermissionDataSet|null $RowLevelPermissionDataSet
 */
class RowLevelPermissionConfiguration extends Shape
{
    /**
     * @param array{
     *     TagConfiguration?: RowLevelPermissionTagConfiguration|null,
     *     RowLevelPermissionDataSet?: RowLevelPermissionDataSet|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
