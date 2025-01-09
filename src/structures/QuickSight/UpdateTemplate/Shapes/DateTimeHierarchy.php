<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HierarchyId
 * @property list<DrillDownFilter> $DrillDownFilters
 */
class DateTimeHierarchy extends Shape
{
    /**
     * @param array{
     *     HierarchyId: string,
     *     DrillDownFilters?: list<DrillDownFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
