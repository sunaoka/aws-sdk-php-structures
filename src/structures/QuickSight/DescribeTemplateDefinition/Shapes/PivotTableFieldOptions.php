<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<PivotTableFieldOption> $SelectedFieldOptions
 * @property list<PivotTableDataPathOption> $DataPathOptions
 * @property list<PivotTableFieldCollapseStateOption> $CollapseStateOptions
 */
class PivotTableFieldOptions extends Shape
{
    /**
     * @param array{
     *     SelectedFieldOptions?: list<PivotTableFieldOption>,
     *     DataPathOptions?: list<PivotTableDataPathOption>,
     *     CollapseStateOptions?: list<PivotTableFieldCollapseStateOption>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
