<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataPathValue> $DataPathList
 * @property string $Width
 */
class PivotTableDataPathOption extends Shape
{
    /**
     * @param array{
     *     DataPathList: list<DataPathValue>,
     *     Width?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
