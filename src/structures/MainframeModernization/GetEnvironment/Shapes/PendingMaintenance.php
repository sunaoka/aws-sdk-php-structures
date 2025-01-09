<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $engineVersion
 * @property MaintenanceSchedule $schedule
 */
class PendingMaintenance extends Shape
{
    /**
     * @param array{
     *     engineVersion?: string,
     *     schedule?: MaintenanceSchedule
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
