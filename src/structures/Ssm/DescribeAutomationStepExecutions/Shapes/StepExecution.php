<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeAutomationStepExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StepName
 * @property string|null $Action
 * @property int|null $TimeoutSeconds
 * @property string|null $OnFailure
 * @property int|null $MaxAttempts
 * @property \Aws\Api\DateTimeResult|null $ExecutionStartTime
 * @property \Aws\Api\DateTimeResult|null $ExecutionEndTime
 * @property 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null $StepStatus
 * @property string|null $ResponseCode
 * @property array<string, string>|null $Inputs
 * @property array<string, list<string>>|null $Outputs
 * @property string|null $Response
 * @property string|null $FailureMessage
 * @property FailureDetails|null $FailureDetails
 * @property string|null $StepExecutionId
 * @property array<string, list<string>>|null $OverriddenParameters
 * @property bool|null $IsEnd
 * @property string|null $NextStep
 * @property bool|null $IsCritical
 * @property list<string>|null $ValidNextSteps
 * @property list<Target>|null $Targets
 * @property TargetLocation|null $TargetLocation
 * @property list<AlarmStateInformation>|null $TriggeredAlarms
 * @property ParentStepDetails|null $ParentStepDetails
 */
class StepExecution extends Shape
{
    /**
     * @param array{
     *     StepName?: string|null,
     *     Action?: string|null,
     *     TimeoutSeconds?: int|null,
     *     OnFailure?: string|null,
     *     MaxAttempts?: int|null,
     *     ExecutionStartTime?: \Aws\Api\DateTimeResult|null,
     *     ExecutionEndTime?: \Aws\Api\DateTimeResult|null,
     *     StepStatus?: 'Pending'|'InProgress'|'Waiting'|'Success'|'TimedOut'|'Cancelling'|'Cancelled'|'Failed'|'PendingApproval'|'Approved'|'Rejected'|'Scheduled'|'RunbookInProgress'|'PendingChangeCalendarOverride'|'ChangeCalendarOverrideApproved'|'ChangeCalendarOverrideRejected'|'CompletedWithSuccess'|'CompletedWithFailure'|'Exited'|null,
     *     ResponseCode?: string|null,
     *     Inputs?: array<string, string>|null,
     *     Outputs?: array<string, list<string>>|null,
     *     Response?: string|null,
     *     FailureMessage?: string|null,
     *     FailureDetails?: FailureDetails|null,
     *     StepExecutionId?: string|null,
     *     OverriddenParameters?: array<string, list<string>>|null,
     *     IsEnd?: bool|null,
     *     NextStep?: string|null,
     *     IsCritical?: bool|null,
     *     ValidNextSteps?: list<string>|null,
     *     Targets?: list<Target>|null,
     *     TargetLocation?: TargetLocation|null,
     *     TriggeredAlarms?: list<AlarmStateInformation>|null,
     *     ParentStepDetails?: ParentStepDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
