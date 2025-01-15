<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $engineVersion
 * @property MaintenanceSchedule|null $schedule
 */
class PendingMaintenance extends Shape
{
    /**
     * @param array{
     *     engineVersion?: string|null,
     *     schedule?: MaintenanceSchedule|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
