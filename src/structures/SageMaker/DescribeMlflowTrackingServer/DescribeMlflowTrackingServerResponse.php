<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowTrackingServer;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $TrackingServerArn
 * @property string $TrackingServerName
 * @property string $ArtifactStoreUri
 * @property 'Small'|'Medium'|'Large' $TrackingServerSize
 * @property string $MlflowVersion
 * @property string $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Stopping'|'Stopped'|'StopFailed'|'Starting'|'Started'|'StartFailed'|'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed' $TrackingServerStatus
 * @property 'Active'|'Inactive' $IsActive
 * @property string $TrackingServerUrl
 * @property string $WeeklyMaintenanceWindowStart
 * @property bool $AutomaticModelRegistration
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeMlflowTrackingServerResponse extends Response
{
}
