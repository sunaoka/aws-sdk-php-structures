<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HierarchyId
 * @property list<ColumnIdentifier> $Columns
 * @property list<DrillDownFilter> $DrillDownFilters
 */
class ExplicitHierarchy extends Shape
{
    /**
     * @param array{
     *     HierarchyId: string,
     *     Columns: list<ColumnIdentifier>,
     *     DrillDownFilters?: list<DrillDownFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
