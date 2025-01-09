<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property string $Catalog
 * @property string $Schema
 * @property string $Name
 * @property list<InputColumn> $InputColumns
 */
class RelationalTable extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     Catalog?: string,
     *     Schema?: string,
     *     Name: string,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
