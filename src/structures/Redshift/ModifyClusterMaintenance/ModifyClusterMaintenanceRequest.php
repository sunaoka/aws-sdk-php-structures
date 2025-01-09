<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterMaintenance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property bool $DeferMaintenance
 * @property string $DeferMaintenanceIdentifier
 * @property \Aws\Api\DateTimeResult $DeferMaintenanceStartTime
 * @property \Aws\Api\DateTimeResult $DeferMaintenanceEndTime
 * @property int $DeferMaintenanceDuration
 */
class ModifyClusterMaintenanceRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     DeferMaintenance?: bool,
     *     DeferMaintenanceIdentifier?: string,
     *     DeferMaintenanceStartTime?: \Aws\Api\DateTimeResult,
     *     DeferMaintenanceEndTime?: \Aws\Api\DateTimeResult,
     *     DeferMaintenanceDuration?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
