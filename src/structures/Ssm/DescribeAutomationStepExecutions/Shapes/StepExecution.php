<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StepName
 * @property string $Action
 * @property int $TimeoutSeconds
 * @property string $OnFailure
 * @property int $MaxAttempts
 * @property \Aws\Api\DateTimeResult $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult $ExecutionEndTime
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited' $StepStatus
 * @property string $ResponseCode
 * @property array<string, string> $Inputs
 * @property array<string, list<string>> $Outputs
 * @property string $Response
 * @property string $FailureMessage
 * @property FailureDetails $FailureDetails
 * @property string $StepExecutionId
 * @property array<string, list<string>> $OverriddenParameters
 * @property bool $IsEnd
 * @property string $NextStep
 * @property bool $IsCritical
 * @property list<string> $ValidNextSteps
 * @property list<Target> $Targets
 * @property TargetLocation $TargetLocation
 * @property list<AlarmStateInformation> $TriggeredAlarms
 * @property ParentStepDetails $ParentStepDetails
 */
class StepExecution extends Shape
{
    /**
     * @param array{
     *     StepName?: string,
     *     Action?: string,
     *     TimeoutSeconds?: int,
     *     OnFailure?: string,
     *     MaxAttempts?: int,
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult,
     *     StepStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited',
     *     ResponseCode?: string,
     *     Inputs?: array<string, string>,
     *     Outputs?: array<string, list<string>>,
     *     Response?: string,
     *     FailureMessage?: string,
     *     FailureDetails?: FailureDetails,
     *     StepExecutionId?: string,
     *     OverriddenParameters?: array<string, list<string>>,
     *     IsEnd?: bool,
     *     NextStep?: string,
     *     IsCritical?: bool,
     *     ValidNextSteps?: list<string>,
     *     Targets?: list<Target>,
     *     TargetLocation?: TargetLocation,
     *     TriggeredAlarms?: list<AlarmStateInformation>,
     *     ParentStepDetails?: ParentStepDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
