<?php

namespace Sunaoka\Aws\Structures\TimestreamInfluxDB\CreateDbCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timezone
 * @property string $preferredMaintenanceWindow
 */
class MaintenanceSchedule extends Shape
{
    /**
     * @param array{
     *     timezone: string,
     *     preferredMaintenanceWindow: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
