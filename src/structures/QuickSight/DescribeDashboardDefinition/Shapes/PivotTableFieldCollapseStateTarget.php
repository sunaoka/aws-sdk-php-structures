<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property list<DataPathValue> $FieldDataPathValues
 */
class PivotTableFieldCollapseStateTarget extends Shape
{
    /**
     * @param array{
     *     FieldId?: string,
     *     FieldDataPathValues?: list<DataPathValue>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
