<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FieldId
 * @property list<DataPathValue>|null $FieldDataPathValues
 */
class PivotTableFieldCollapseStateTarget extends Shape
{
    /**
     * @param array{
     *     FieldId?: string|null,
     *     FieldDataPathValues?: list<DataPathValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
