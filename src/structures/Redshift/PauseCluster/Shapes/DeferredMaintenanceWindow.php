<?php

namespace Sunaoka\Aws\Structures\Redshift\PauseCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DeferMaintenanceIdentifier
 * @property \Aws\Api\DateTimeResult|null $DeferMaintenanceStartTime
 * @property \Aws\Api\DateTimeResult|null $DeferMaintenanceEndTime
 */
class DeferredMaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     DeferMaintenanceIdentifier?: string|null,
     *     DeferMaintenanceStartTime?: \Aws\Api\DateTimeResult|null,
     *     DeferMaintenanceEndTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
