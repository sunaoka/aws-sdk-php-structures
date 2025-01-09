<?php

namespace Sunaoka\Aws\Structures\Ssm\GetAutomationExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutomationExecutionId
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property \Aws\Api\DateTimeResult $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult $ExecutionEndTime
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited' $AutomationExecutionStatus
 * @property list<StepExecution> $StepExecutions
 * @property bool $StepExecutionsTruncated
 * @property array<string, list<string>> $Parameters
 * @property array<string, list<string>> $Outputs
 * @property string $FailureMessage
 * @property 'Auto'|'Interactive' $Mode
 * @property string $ParentAutomationExecutionId
 * @property string $ExecutedBy
 * @property string $CurrentStepName
 * @property string $CurrentAction
 * @property string $TargetParameterName
 * @property list<Target> $Targets
 * @property list<array<string, list<string>>> $TargetMaps
 * @property ResolvedTargets $ResolvedTargets
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property string $Target
 * @property list<TargetLocation> $TargetLocations
 * @property ProgressCounters $ProgressCounters
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 * @property string $TargetLocationsURL
 * @property 'ChangeRequest' $AutomationSubtype
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property list<Runbook> $Runbooks
 * @property string $OpsItemId
 * @property string $AssociationId
 * @property string $ChangeRequestName
 * @property array<string, list<string>> $Variables
 */
class AutomationExecution extends Shape
{
    /**
     * @param array{
     *     AutomationExecutionId?: string,
     *     DocumentName?: string,
     *     DocumentVersion?: string,
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult,
     *     AutomationExecutionStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited',
     *     StepExecutions?: list<StepExecution>,
     *     StepExecutionsTruncated?: bool,
     *     Parameters?: array<string, list<string>>,
     *     Outputs?: array<string, list<string>>,
     *     FailureMessage?: string,
     *     Mode?: 'Auto'|'Interactive',
     *     ParentAutomationExecutionId?: string,
     *     ExecutedBy?: string,
     *     CurrentStepName?: string,
     *     CurrentAction?: string,
     *     TargetParameterName?: string,
     *     Targets?: list<Target>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     ResolvedTargets?: ResolvedTargets,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     Target?: string,
     *     TargetLocations?: list<TargetLocation>,
     *     ProgressCounters?: ProgressCounters,
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>,
     *     TargetLocationsURL?: string,
     *     AutomationSubtype?: 'ChangeRequest',
     *     ScheduledTime?: \Aws\Api\DateTimeResult,
     *     Runbooks?: list<Runbook>,
     *     OpsItemId?: string,
     *     AssociationId?: string,
     *     ChangeRequestName?: string,
     *     Variables?: array<string, list<string>>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
