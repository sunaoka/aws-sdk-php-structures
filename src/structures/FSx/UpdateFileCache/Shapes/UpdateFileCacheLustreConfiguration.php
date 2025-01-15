<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WeeklyMaintenanceStartTime
 */
class UpdateFileCacheLustreConfiguration extends Shape
{
    /**
     * @param array{WeeklyMaintenanceStartTime?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
