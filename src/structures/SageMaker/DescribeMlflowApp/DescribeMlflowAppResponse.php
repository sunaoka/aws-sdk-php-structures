<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeMlflowApp;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $ArtifactStoreUri
 * @property string|null $MlflowVersion
 * @property string|null $RoleArn
 * @property 'Creating'|'Created'|'CreateFailed'|'Updating'|'Updated'|'UpdateFailed'|'Deleting'|'DeleteFailed'|'Deleted'|null $Status
 * @property 'AutoModelRegistrationEnabled'|'AutoModelRegistrationDisabled'|null $ModelRegistrationMode
 * @property 'ENABLED'|'DISABLED'|null $AccountDefaultStatus
 * @property list<string>|null $DefaultDomainIdList
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 * @property string|null $WeeklyMaintenanceWindowStart
 * @property 'MaintenanceInProgress'|'MaintenanceComplete'|'MaintenanceFailed'|null $MaintenanceStatus
 */
class DescribeMlflowAppResponse extends Response
{
}
