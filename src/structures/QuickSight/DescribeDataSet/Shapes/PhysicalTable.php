<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RelationalTable $RelationalTable
 * @property CustomSql $CustomSql
 * @property S3Source $S3Source
 */
class PhysicalTable extends Shape
{
    /**
     * @param array{
     *     RelationalTable?: RelationalTable,
     *     CustomSql?: CustomSql,
     *     S3Source?: S3Source
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
