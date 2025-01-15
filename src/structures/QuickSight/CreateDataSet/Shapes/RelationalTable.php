<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property string|null $Catalog
 * @property string|null $Schema
 * @property string $Name
 * @property list<InputColumn> $InputColumns
 */
class RelationalTable extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     Catalog?: string|null,
     *     Schema?: string|null,
     *     Name: string,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
