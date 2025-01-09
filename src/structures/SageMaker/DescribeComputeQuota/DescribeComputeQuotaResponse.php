<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ComputeQuotaArn
 * @property string $ComputeQuotaId
 * @property string $Name
 * @property string $Description
 * @property int $ComputeQuotaVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string $FailureReason
 * @property string $ClusterArn
 * @property Shapes\ComputeQuotaConfig $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled' $ActivationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeComputeQuotaResponse extends Response
{
}
