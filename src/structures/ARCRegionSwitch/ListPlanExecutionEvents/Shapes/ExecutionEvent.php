<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\ListPlanExecutionEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $timestamp
 * @property 'unknown'|'executionPending'|'executionStarted'|'executionSucceeded'|'executionFailed'|'executionPausing'|'executionPaused'|'executionCanceling'|'executionCanceled'|'executionPendingApproval'|'executionBehaviorChangedToUngraceful'|'executionBehaviorChangedToGraceful'|'executionPendingChildPlanManualApproval'|'executionSuccessMonitoringApplicationHealth'|'stepStarted'|'stepUpdate'|'stepSucceeded'|'stepFailed'|'stepSkipped'|'stepPausedByError'|'stepPausedByOperator'|'stepCanceled'|'stepPendingApproval'|'stepExecutionBehaviorChangedToUngraceful'|'stepPendingApplicationHealthMonitor'|'planEvaluationWarning'|null $type
 * @property string|null $stepName
 * @property 'CustomActionLambda'|'ManualApproval'|'AuroraGlobalDatabase'|'EC2AutoScaling'|'ARCRoutingControl'|'ARCRegionSwitchPlan'|'Parallel'|'ECSServiceScaling'|'EKSResourceScaling'|'Route53HealthCheck'|'DocumentDb'|'RdsPromoteReadReplica'|'RdsCreateCrossRegionReplica'|null $executionBlockType
 * @property list<string>|null $resources
 * @property string|null $error
 * @property string|null $description
 * @property string $eventId
 * @property string|null $previousEventId
 */
class ExecutionEvent extends Shape
{
    /**
     * @param array{
     *     timestamp?: \Aws\Api\DateTimeResult|null,
     *     type?: 'unknown'|'executionPending'|'executionStarted'|'executionSucceeded'|'executionFailed'|'executionPausing'|'executionPaused'|'executionCanceling'|'executionCanceled'|'executionPendingApproval'|'executionBehaviorChangedToUngraceful'|'executionBehaviorChangedToGraceful'|'executionPendingChildPlanManualApproval'|'executionSuccessMonitoringApplicationHealth'|'stepStarted'|'stepUpdate'|'stepSucceeded'|'stepFailed'|'stepSkipped'|'stepPausedByError'|'stepPausedByOperator'|'stepCanceled'|'stepPendingApproval'|'stepExecutionBehaviorChangedToUngraceful'|'stepPendingApplicationHealthMonitor'|'planEvaluationWarning'|null,
     *     stepName?: string|null,
     *     executionBlockType?: 'CustomActionLambda'|'ManualApproval'|'AuroraGlobalDatabase'|'EC2AutoScaling'|'ARCRoutingControl'|'ARCRegionSwitchPlan'|'Parallel'|'ECSServiceScaling'|'EKSResourceScaling'|'Route53HealthCheck'|'DocumentDb'|'RdsPromoteReadReplica'|'RdsCreateCrossRegionReplica'|null,
     *     resources?: list<string>|null,
     *     error?: string|null,
     *     description?: string|null,
     *     eventId: string,
     *     previousEventId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
