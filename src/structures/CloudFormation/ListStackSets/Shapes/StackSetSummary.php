<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackSetName
 * @property string|null $StackSetId
 * @property string|null $Description
 * @property 'ACTIVE'|'DELETED'|null $Status
 * @property AutoDeployment|null $AutoDeployment
 * @property 'SERVICE_MANAGED'|'SELF_MANAGED'|null $PermissionModel
 * @property 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED'|null $DriftStatus
 * @property \Aws\Api\DateTimeResult|null $LastDriftCheckTimestamp
 * @property ManagedExecution|null $ManagedExecution
 */
class StackSetSummary extends Shape
{
    /**
     * @param array{
     *     StackSetName?: string|null,
     *     StackSetId?: string|null,
     *     Description?: string|null,
     *     Status?: 'ACTIVE'|'DELETED'|null,
     *     AutoDeployment?: AutoDeployment|null,
     *     PermissionModel?: 'SERVICE_MANAGED'|'SELF_MANAGED'|null,
     *     DriftStatus?: 'DRIFTED'|'IN_SYNC'|'UNKNOWN'|'NOT_CHECKED'|null,
     *     LastDriftCheckTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ManagedExecution?: ManagedExecution|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
