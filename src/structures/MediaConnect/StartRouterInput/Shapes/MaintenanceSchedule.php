<?php

namespace Sunaoka\Aws\Structures\MediaConnect\StartRouterInput\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WindowMaintenanceSchedule|null $Window
 */
class MaintenanceSchedule extends Shape
{
    /**
     * @param array{Window?: WindowMaintenanceSchedule|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
