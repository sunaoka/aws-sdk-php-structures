<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotTableFieldOption>|null $SelectedFieldOptions
 * @property list<PivotTableDataPathOption>|null $DataPathOptions
 * @property list<PivotTableFieldCollapseStateOption>|null $CollapseStateOptions
 */
class PivotTableFieldOptions extends Shape
{
    /**
     * @param array{
     *     SelectedFieldOptions?: list<PivotTableFieldOption>|null,
     *     DataPathOptions?: list<PivotTableDataPathOption>|null,
     *     CollapseStateOptions?: list<PivotTableFieldCollapseStateOption>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
