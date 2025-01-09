<?php

namespace Sunaoka\Aws\Structures\Redshift\EnableSnapshotCopy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DeferMaintenanceIdentifier
 * @property \Aws\Api\DateTimeResult $DeferMaintenanceStartTime
 * @property \Aws\Api\DateTimeResult $DeferMaintenanceEndTime
 */
class DeferredMaintenanceWindow extends Shape
{
    /**
     * @param array{
     *     DeferMaintenanceIdentifier?: string,
     *     DeferMaintenanceStartTime?: \Aws\Api\DateTimeResult,
     *     DeferMaintenanceEndTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
