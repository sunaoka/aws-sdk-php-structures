<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ColumnName
 * @property list<'COLUMN_GEOGRAPHIC_ROLE'|'COLUMN_DESCRIPTION'> $TagNames
 */
class UntagColumnOperation extends Shape
{
    /**
     * @param array{
     *     ColumnName: string,
     *     TagNames: list<'COLUMN_GEOGRAPHIC_ROLE'|'COLUMN_DESCRIPTION'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
