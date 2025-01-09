<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DashboardSourceTemplate $SourceTemplate
 */
class DashboardSourceEntity extends Shape
{
    /**
     * @param array{SourceTemplate?: DashboardSourceTemplate} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
