<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterSchedulerConfigArn
 * @property string $ClusterSchedulerConfigId
 * @property string $Name
 * @property int $ClusterSchedulerConfigVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string|null $FailureReason
 * @property array<'PriorityClasses'|'FairShare'|'IdleResourceSharing', 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted'>|null $StatusDetails
 * @property string|null $ClusterArn
 * @property Shapes\SchedulerConfig|null $SchedulerConfig
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeClusterSchedulerConfigResponse extends Response
{
}
