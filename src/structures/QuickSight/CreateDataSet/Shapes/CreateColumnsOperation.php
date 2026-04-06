<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CalculatedColumn> $Columns
 */
class CreateColumnsOperation extends Shape
{
    /**
     * @param array{Columns: list<CalculatedColumn>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
