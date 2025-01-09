<?php

namespace Sunaoka\Aws\Structures\CloudFormation\DescribeStackSetOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OperationId
 * @property string $StackSetId
 * @property 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT' $Action
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED' $Status
 * @property StackSetOperationPreferences $OperationPreferences
 * @property bool $RetainStacks
 * @property string $AdministrationRoleARN
 * @property string $ExecutionRoleName
 * @property \Aws\Api\DateTimeResult $CreationTimestamp
 * @property \Aws\Api\DateTimeResult $EndTimestamp
 * @property DeploymentTargets $DeploymentTargets
 * @property StackSetDriftDetectionDetails $StackSetDriftDetectionDetails
 * @property string $StatusReason
 * @property StackSetOperationStatusDetails $StatusDetails
 */
class StackSetOperation extends Shape
{
    /**
     * @param array{
     *     OperationId?: string,
     *     StackSetId?: string,
     *     Action?: 'CREATE'|'UPDATE'|'DELETE'|'DETECT_DRIFT',
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'STOPPING'|'STOPPED'|'QUEUED',
     *     OperationPreferences?: StackSetOperationPreferences,
     *     RetainStacks?: bool,
     *     AdministrationRoleARN?: string,
     *     ExecutionRoleName?: string,
     *     CreationTimestamp?: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult,
     *     DeploymentTargets?: DeploymentTargets,
     *     StackSetDriftDetectionDetails?: StackSetDriftDetectionDetails,
     *     StatusReason?: string,
     *     StatusDetails?: StackSetOperationStatusDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
