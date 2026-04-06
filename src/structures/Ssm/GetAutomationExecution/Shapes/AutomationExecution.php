<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AutomationExecutionId
 * @property string|null $DocumentName
 * @property string|null $DocumentVersion
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult|null $ExecutionEndTime
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null $AutomationExecutionStatus
 * @property list<StepExecution>|null $StepExecutions
 * @property bool|null $StepExecutionsTruncated
 * @property array<string, list<string>>|null $Parameters
 * @property array<string, list<string>>|null $Outputs
 * @property string|null $FailureMessage
 * @property 'Auto'|'Interactive'|null $Mode
 * @property string|null $ParentAutomationExecutionId
 * @property string|null $ExecutedBy
 * @property string|null $CurrentStepName
 * @property string|null $CurrentAction
 * @property string|null $TargetParameterName
 * @property list<Target>|null $Targets
 * @property list<array<string, list<string>>>|null $TargetMaps
 * @property ResolvedTargets|null $ResolvedTargets
 * @property string|null $MaxConcurrency
 * @property string|null $MaxErrors
 * @property string|null $Target
 * @property list<TargetLocation>|null $TargetLocations
 * @property ProgressCounters|null $ProgressCounters
 * @property AlarmConfiguration|null $AlarmConfiguration
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 * @property string|null $TargetLocationsURL
 * @property 'ChangeRequest'|'AccessRequest'|null $AutomationSubtype
 * @property \Aws\Api\DateTimeResult|null $ScheduledTime
 * @property list<Runbook>|null $Runbooks
 * @property string|null $OpsItemId
 * @property string|null $AssociationId
 * @property string|null $ChangeRequestName
 * @property array<string, list<string>>|null $Variables
 */
class AutomationExecution extends Shape
{
    /**
     * @param array{
     *     AutomationExecutionId?: string|null,
     *     DocumentName?: string|null,
     *     DocumentVersion?: string|null,
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult|null,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult|null,
     *     AutomationExecutionStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null,
     *     StepExecutions?: list<StepExecution>|null,
     *     StepExecutionsTruncated?: bool|null,
     *     Parameters?: array<string, list<string>>|null,
     *     Outputs?: array<string, list<string>>|null,
     *     FailureMessage?: string|null,
     *     Mode?: 'Auto'|'Interactive'|null,
     *     ParentAutomationExecutionId?: string|null,
     *     ExecutedBy?: string|null,
     *     CurrentStepName?: string|null,
     *     CurrentAction?: string|null,
     *     TargetParameterName?: string|null,
     *     Targets?: list<Target>|null,
     *     TargetMaps?: list<array<string, list<string>>>|null,
     *     ResolvedTargets?: ResolvedTargets|null,
     *     MaxConcurrency?: string|null,
     *     MaxErrors?: string|null,
     *     Target?: string|null,
     *     TargetLocations?: list<TargetLocation>|null,
     *     ProgressCounters?: ProgressCounters|null,
     *     AlarmConfiguration?: AlarmConfiguration|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null,
     *     TargetLocationsURL?: string|null,
     *     AutomationSubtype?: 'ChangeRequest'|'AccessRequest'|null,
     *     ScheduledTime?: \Aws\Api\DateTimeResult|null,
     *     Runbooks?: list<Runbook>|null,
     *     OpsItemId?: string|null,
     *     AssociationId?: string|null,
     *     ChangeRequestName?: string|null,
     *     Variables?: array<string, list<string>>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
