<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property string $Name
 * @property string $SqlQuery
 * @property list<InputColumn> $Columns
 */
class CustomSql extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     Name: string,
     *     SqlQuery: string,
     *     Columns?: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
