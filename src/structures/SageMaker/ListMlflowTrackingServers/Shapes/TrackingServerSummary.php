<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowTrackingServers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TrackingServerArn
 * @property string $TrackingServerName
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed' $TrackingServerStatus
 * @property 'Active'|'Inactive' $IsActive
 * @property string $MlflowVersion
 */
class TrackingServerSummary extends Shape
{
    /**
     * @param array{
     *     TrackingServerArn?: string,
     *     TrackingServerName?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult,
     *     TrackingServerStatus?: 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed',
     *     IsActive?: 'Active'|'Inactive',
     *     MlflowVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
