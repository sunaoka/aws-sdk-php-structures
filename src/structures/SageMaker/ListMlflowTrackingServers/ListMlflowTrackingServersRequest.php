<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListMlflowTrackingServers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null $TrackingServerStatus
 * @property string|null $MlflowVersion
 * @property 'Name'|'CreationTime'|'Status'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListMlflowTrackingServersRequest extends Request
{
    /**
     * @param array{
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     TrackingServerStatus?: 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null,
     *     MlflowVersion?: string|null,
     *     SortBy?: 'Name'|'CreationTime'|'Status'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
