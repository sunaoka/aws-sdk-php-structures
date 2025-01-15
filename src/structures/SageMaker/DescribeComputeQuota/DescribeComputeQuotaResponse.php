<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeComputeQuota;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ComputeQuotaArn
 * @property string $ComputeQuotaId
 * @property string $Name
 * @property string|null $Description
 * @property int $ComputeQuotaVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string|null $FailureReason
 * @property string|null $ClusterArn
 * @property Shapes\ComputeQuotaConfig|null $ComputeQuotaConfig
 * @property Shapes\ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled'|null $ActivationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeComputeQuotaResponse extends Response
{
}
