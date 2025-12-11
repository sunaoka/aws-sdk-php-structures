<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataSourceArn
 * @property list<TablePathElement> $TablePath
 * @property list<InputColumn> $InputColumns
 */
class SaaSTable extends Shape
{
    /**
     * @param array{
     *     DataSourceArn: string,
     *     TablePath: list<TablePathElement>,
     *     InputColumns: list<InputColumn>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
