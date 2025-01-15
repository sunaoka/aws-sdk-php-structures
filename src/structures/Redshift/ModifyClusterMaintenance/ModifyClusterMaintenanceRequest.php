<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterMaintenance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property bool|null $DeferMaintenance
 * @property string|null $DeferMaintenanceIdentifier
 * @property \Aws\Api\DateTimeResult|null $DeferMaintenanceStartTime
 * @property \Aws\Api\DateTimeResult|null $DeferMaintenanceEndTime
 * @property int|null $DeferMaintenanceDuration
 */
class ModifyClusterMaintenanceRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     DeferMaintenance?: bool|null,
     *     DeferMaintenanceIdentifier?: string|null,
     *     DeferMaintenanceStartTime?: \Aws\Api\DateTimeResult|null,
     *     DeferMaintenanceEndTime?: \Aws\Api\DateTimeResult|null,
     *     DeferMaintenanceDuration?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
