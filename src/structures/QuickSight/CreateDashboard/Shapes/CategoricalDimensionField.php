<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FieldId
 * @property ColumnIdentifier $Column
 * @property string|null $HierarchyId
 * @property StringFormatConfiguration|null $FormatConfiguration
 */
class CategoricalDimensionField extends Shape
{
    /**
     * @param array{
     *     FieldId: string,
     *     Column: ColumnIdentifier,
     *     HierarchyId?: string|null,
     *     FormatConfiguration?: StringFormatConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
