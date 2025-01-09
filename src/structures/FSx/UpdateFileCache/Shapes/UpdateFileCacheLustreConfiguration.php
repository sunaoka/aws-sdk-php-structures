<?php

namespace Sunaoka\Aws\Structures\FSx\UpdateFileCache\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $WeeklyMaintenanceStartTime
 */
class UpdateFileCacheLustreConfiguration extends Shape
{
    /**
     * @param array{WeeklyMaintenanceStartTime?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
