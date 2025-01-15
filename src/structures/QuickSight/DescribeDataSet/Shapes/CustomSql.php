<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property string $Name
 * @property string $SqlQuery
 * @property list<InputColumn>|null $Columns
 */
class CustomSql extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     Name: string,
     *     SqlQuery: string,
     *     Columns?: list<InputColumn>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
