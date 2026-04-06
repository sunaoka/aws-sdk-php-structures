<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowTrackingServer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $TrackingServerArn
 * @property string|null $TrackingServerName
 * @property string|null $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large'|null $TrackingServerSize
 * @property string|null $MlflowVersion
 * @property string|null $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null $TrackingServerStatus
 * @property 'Active'|'Inactive'|null $IsActive
 * @property string|null $TrackingServerUrl
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property bool|null $AutomaticModelRegistration
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeMlflowTrackingServerResponse extends Response
{
}
