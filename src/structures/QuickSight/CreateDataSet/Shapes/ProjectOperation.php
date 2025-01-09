<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ProjectedColumns
 */
class ProjectOperation extends Shape
{
    /**
     * @param array{ProjectedColumns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
