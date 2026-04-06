<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListComputeQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ComputeQuotaArn
 * @property string $ComputeQuotaId
 * @property string $Name
 * @property int|null $ComputeQuotaVersion
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string|null $ClusterArn
 * @property ComputeQuotaConfig|null $ComputeQuotaConfig
 * @property ComputeQuotaTarget $ComputeQuotaTarget
 * @property 'Enabled'|'Disabled'|null $ActivationState
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class ComputeQuotaSummary extends Shape
{
    /**
     * @param array{
     *     ComputeQuotaArn: string,
     *     ComputeQuotaId: string,
     *     Name: string,
     *     ComputeQuotaVersion?: int|null,
     *     Status: 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted',
     *     ClusterArn?: string|null,
     *     ComputeQuotaConfig?: ComputeQuotaConfig|null,
     *     ComputeQuotaTarget: ComputeQuotaTarget,
     *     ActivationState?: 'Enabled'|'Disabled'|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
