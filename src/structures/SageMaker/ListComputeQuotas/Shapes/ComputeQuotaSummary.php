<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputeQuotaArn
 * @property string $ComputeQuotaId
 * @property string $Name
 * @property int $ComputeQuotaVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string $ClusterArn
 * @property ComputeQuotaConfig $ComputeQuotaConfig
 * @property ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled' $ActivationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 */
class ComputeQuotaSummary extends Shape
{
    /**
     * @param array{
     *     ComputeQuotaArn: string,
     *     ComputeQuotaId: string,
     *     Name: string,
     *     ComputeQuotaVersion?: int,
     *     Status: 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted',
     *     ClusterArn?: string,
     *     ComputeQuotaConfig?: ComputeQuotaConfig,
     *     ComputeQuotaTarget: ComputeQuotaTarget,
     *     ActivationState?: 'Enabled'|'Disabled',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
