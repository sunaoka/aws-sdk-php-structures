<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HierarchyId
 * @property list<DrillDownFilter>|null $DrillDownFilters
 */
class DateTimeHierarchy extends Shape
{
    /**
     * @param array{
     *     HierarchyId: string,
     *     DrillDownFilters?: list<DrillDownFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
