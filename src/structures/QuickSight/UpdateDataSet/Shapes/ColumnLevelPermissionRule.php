<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Principals
 * @property list<string> $ColumnNames
 */
class ColumnLevelPermissionRule extends Shape
{
    /**
     * @param array{
     *     Principals?: list<string>,
     *     ColumnNames?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
