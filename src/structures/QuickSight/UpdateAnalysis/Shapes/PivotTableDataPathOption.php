<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<DataPathValue> $DataPathList
 * @property string|null $Width
 */
class PivotTableDataPathOption extends Shape
{
    /**
     * @param array{
     *     DataPathList: list<DataPathValue>,
     *     Width?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
