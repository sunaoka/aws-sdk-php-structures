<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListClusterSchedulerConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterSchedulerConfigArn
 * @property string $ClusterSchedulerConfigId
 * @property int|null $ClusterSchedulerConfigVersion
 * @property string $Name
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted' $Status
 * @property string|null $ClusterArn
 */
class ClusterSchedulerConfigSummary extends Shape
{
    /**
     * @param array{
     *     ClusterSchedulerConfigArn: string,
     *     ClusterSchedulerConfigId: string,
     *     ClusterSchedulerConfigVersion?: int|null,
     *     Name: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Status: 'Creating'|'CreateFailed'|'CreateRollbackFailed'|'Created'|'Updating'|'UpdateFailed'|'UpdateRollbackFailed'|'Updated'|'Deleting'|'DeleteFailed'|'DeleteRollbackFailed'|'Deleted',
     *     ClusterArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
