<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ColumnIdentifier|null $UserNameColumn
 * @property ColumnIdentifier|null $GroupNameColumn
 * @property ColumnIdentifier $DefaultValueColumn
 */
class DynamicDefaultValue extends Shape
{
    /**
     * @param array{
     *     UserNameColumn?: ColumnIdentifier|null,
     *     GroupNameColumn?: ColumnIdentifier|null,
     *     DefaultValueColumn: ColumnIdentifier
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
