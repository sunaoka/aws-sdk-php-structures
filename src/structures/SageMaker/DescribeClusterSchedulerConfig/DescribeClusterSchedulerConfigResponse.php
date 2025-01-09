<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterSchedulerConfig;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ClusterSchedulerConfigArn
 * @property string $ClusterSchedulerConfigId
 * @property string $Name
 * @property int $ClusterSchedulerConfigVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string $FailureReason
 * @property string $ClusterArn
 * @property Shapes\SchedulerConfig $SchedulerConfig
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeClusterSchedulerConfigResponse extends Response
{
}
