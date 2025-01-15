<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property string|null $HierarchyId
 * @property NumberFormatConfiguration|null $FormatConfiguration
 */
class NumericalDimensionField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     HierarchyId?: string|null,
     *     FormatConfiguration?: NumberFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
