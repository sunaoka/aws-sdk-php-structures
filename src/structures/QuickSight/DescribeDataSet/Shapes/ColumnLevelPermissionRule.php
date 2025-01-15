<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Principals
 * @property list<string>|null $ColumnNames
 */
class ColumnLevelPermissionRule extends Shape
{
    /**
     * @param array{
     *     Principals?: list<string>|null,
     *     ColumnNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
