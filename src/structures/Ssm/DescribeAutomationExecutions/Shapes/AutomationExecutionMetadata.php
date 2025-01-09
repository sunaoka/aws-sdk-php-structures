<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AutomationExecutionId
 * @property string $DocumentName
 * @property string $DocumentVersion
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited' $AutomationExecutionStatus
 * @property \Aws\Api\DateTimeResult $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult $ExecutionEndTime
 * @property string $ExecutedBy
 * @property string $LogFile
 * @property array<string, list<string>> $Outputs
 * @property 'Auto'|'Interactive' $Mode
 * @property string $ParentAutomationExecutionId
 * @property string $CurrentStepName
 * @property string $CurrentAction
 * @property string $FailureMessage
 * @property string $TargetParameterName
 * @property list<Target> $Targets
 * @property list<array<string, list<string>>> $TargetMaps
 * @property ResolvedTargets $ResolvedTargets
 * @property string $MaxConcurrency
 * @property string $MaxErrors
 * @property string $Target
 * @property 'CrossAccount'|'Local' $AutomationType
 * @property AlarmConfiguration $AlarmConfiguration
 * @property list<AlarmStateInformation> $TriggeredAlarms
 * @property string $TargetLocationsURL
 * @property 'ChangeRequest' $AutomationSubtype
 * @property \Aws\Api\DateTimeResult $ScheduledTime
 * @property list<Runbook> $Runbooks
 * @property string $OpsItemId
 * @property string $AssociationId
 * @property string $ChangeRequestName
 */
class AutomationExecutionMetadata extends Shape
{
    /**
     * @param array{
     *     AutomationExecutionId?: string,
     *     DocumentName?: string,
     *     DocumentVersion?: string,
     *     AutomationExecutionStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited',
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult,
     *     ExecutedBy?: string,
     *     LogFile?: string,
     *     Outputs?: array<string, list<string>>,
     *     Mode?: 'Auto'|'Interactive',
     *     ParentAutomationExecutionId?: string,
     *     CurrentStepName?: string,
     *     CurrentAction?: string,
     *     FailureMessage?: string,
     *     TargetParameterName?: string,
     *     Targets?: list<Target>,
     *     TargetMaps?: list<array<string, list<string>>>,
     *     ResolvedTargets?: ResolvedTargets,
     *     MaxConcurrency?: string,
     *     MaxErrors?: string,
     *     Target?: string,
     *     AutomationType?: 'CrossAccount'|'Local',
     *     AlarmConfiguration?: AlarmConfiguration,
     *     TriggeredAlarms?: list<AlarmStateInformation>,
     *     TargetLocationsURL?: string,
     *     AutomationSubtype?: 'ChangeRequest',
     *     ScheduledTime?: \Aws\Api\DateTimeResult,
     *     Runbooks?: list<Runbook>,
     *     OpsItemId?: string,
     *     AssociationId?: string,
     *     ChangeRequestName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
