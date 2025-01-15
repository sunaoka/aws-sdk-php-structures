<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashboardSourceTemplate|null $SourceTemplate
 */
class DashboardSourceEntity extends Shape
{
    /**
     * @param array{SourceTemplate?: DashboardSourceTemplate|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
