<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowTrackingServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $TrackingServerArn
 * @property string|null $TrackingServerName
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null $TrackingServerStatus
 * @property 'Active'|'Inactive'|null $IsActive
 * @property string|null $MlflowVersion
 */
class TrackingServerSummary extends Shape
{
    /**
     * @param array{
     *     TrackingServerArn?: string|null,
     *     TrackingServerName?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     TrackingServerStatus?: 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null,
     *     IsActive?: 'Active'|'Inactive'|null,
     *     MlflowVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
