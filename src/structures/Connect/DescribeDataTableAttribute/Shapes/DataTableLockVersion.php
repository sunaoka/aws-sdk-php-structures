<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeDataTableAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataTable
 * @property string|null $Attribute
 * @property string|null $PrimaryValues
 * @property string|null $Value
 */
class DataTableLockVersion extends Shape
{
    /**
     * @param array{
     *     DataTable?: string|null,
     *     Attribute?: string|null,
     *     PrimaryValues?: string|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
