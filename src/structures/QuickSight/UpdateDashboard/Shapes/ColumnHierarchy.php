<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExplicitHierarchy|null $ExplicitHierarchy
 * @property DateTimeHierarchy|null $DateTimeHierarchy
 * @property PredefinedHierarchy|null $PredefinedHierarchy
 */
class ColumnHierarchy extends Shape
{
    /**
     * @param array{
     *     ExplicitHierarchy?: ExplicitHierarchy|null,
     *     DateTimeHierarchy?: DateTimeHierarchy|null,
     *     PredefinedHierarchy?: PredefinedHierarchy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
