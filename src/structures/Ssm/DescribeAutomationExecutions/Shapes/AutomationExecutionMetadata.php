<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutomationExecutionId
 * @property string|null $DocumentName
 * @property string|null $DocumentVersion
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null $AutomationExecutionStatus
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult|null $ExecutionEndTime
 * @property string|null $ExecutedBy
 * @property string|null $LogFile
 * @property array<string, list<string>>|null $Outputs
 * @property 'Auto'|'Interactive'|null $Mode
 * @property string|null $ParentAutomationExecutionId
 * @property string|null $CurrentStepName
 * @property string|null $CurrentAction
 * @property string|null $FailureMessage
 * @property string|null $TargetParameterName
 * @property list<Target>|null $Targets
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property ResolvedTargets|null $ResolvedTargets
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property string|null $Target
 * @property 'CrossAccount'|'Local'|null $AutomationType
 * @property AlarmConfiguration|null $AlarmConfiguration
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 * @property string|null $TargetLocationsURL
 * @property 'ChangeRequest'|null $AutomationSubtype
 * @property \Aws\Api\DateTimeResult|null $ScheduledTime
 * @property list<Runbook>|null $Runbooks
 * @property string|null $OpsItemId
 * @property string|null $AssociationId
 * @property string|null $ChangeRequestName
 */
class AutomationExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     AutomationExecutionId?: string|null,
     *     DocumentName?: string|null,
     *     DocumentVersion?: string|null,
     *     AutomationExecutionStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null,
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult|null,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult|null,
     *     ExecutedBy?: string|null,
     *     LogFile?: string|null,
     *     Outputs?: array<string, list<string>>|null,
     *     Mode?: 'Auto'|'Interactive'|null,
     *     ParentAutomationExecutionId?: string|null,
     *     CurrentStepName?: string|null,
     *     CurrentAction?: string|null,
     *     FailureMessage?: string|null,
     *     TargetParameterName?: string|null,
     *     Targets?: list<Target>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     ResolvedTargets?: ResolvedTargets|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     Target?: string|null,
     *     AutomationType?: 'CrossAccount'|'Local'|null,
     *     AlarmConfiguration?: AlarmConfiguration|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null,
     *     TargetLocationsURL?: string|null,
     *     AutomationSubtype?: 'ChangeRequest'|null,
     *     ScheduledTime?: \Aws\Api\DateTimeResult|null,
     *     Runbooks?: list<Runbook>|null,
     *     OpsItemId?: string|null,
     *     AssociationId?: string|null,
     *     ChangeRequestName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
