<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'ActivityFailed'|'ActivityScheduled'|'ActivityScheduleFailed'|'ActivityStarted'|'ActivitySucceeded'|'ActivityTimedOut'|'ChoiceStateEntered'|'ChoiceStateExited'|'ExecutionAborted'|'ExecutionFailed'|'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionTimedOut'|'FailStateEntered'|'LambdaFunctionFailed'|'LambdaFunctionScheduled'|'LambdaFunctionScheduleFailed'|'LambdaFunctionStarted'|'LambdaFunctionStartFailed'|'LambdaFunctionSucceeded'|'LambdaFunctionTimedOut'|'MapIterationAborted'|'MapIterationFailed'|'MapIterationStarted'|'MapIterationSucceeded'|'MapStateAborted'|'MapStateEntered'|'MapStateExited'|'MapStateFailed'|'MapStateStarted'|'MapStateSucceeded'|'ParallelStateAborted'|'ParallelStateEntered'|'ParallelStateExited'|'ParallelStateFailed'|'ParallelStateStarted'|'ParallelStateSucceeded'|'PassStateEntered'|'PassStateExited'|'SucceedStateEntered'|'SucceedStateExited'|'TaskFailed'|'TaskScheduled'|'TaskStarted'|'TaskStartFailed'|'TaskStateAborted'|'TaskStateEntered'|'TaskStateExited'|'TaskSubmitFailed'|'TaskSubmitted'|'TaskSucceeded'|'TaskTimedOut'|'WaitStateAborted'|'WaitStateEntered'|'WaitStateExited'|'MapRunAborted'|'MapRunFailed'|'MapRunStarted'|'MapRunSucceeded'|'ExecutionRedriven'|'MapRunRedriven'|'EvaluationFailed' $type
 * @property int $id
 * @property int $previousEventId
 * @property ActivityFailedEventDetails $activityFailedEventDetails
 * @property ActivityScheduleFailedEventDetails $activityScheduleFailedEventDetails
 * @property ActivityScheduledEventDetails $activityScheduledEventDetails
 * @property ActivityStartedEventDetails $activityStartedEventDetails
 * @property ActivitySucceededEventDetails $activitySucceededEventDetails
 * @property ActivityTimedOutEventDetails $activityTimedOutEventDetails
 * @property TaskFailedEventDetails $taskFailedEventDetails
 * @property TaskScheduledEventDetails $taskScheduledEventDetails
 * @property TaskStartFailedEventDetails $taskStartFailedEventDetails
 * @property TaskStartedEventDetails $taskStartedEventDetails
 * @property TaskSubmitFailedEventDetails $taskSubmitFailedEventDetails
 * @property TaskSubmittedEventDetails $taskSubmittedEventDetails
 * @property TaskSucceededEventDetails $taskSucceededEventDetails
 * @property TaskTimedOutEventDetails $taskTimedOutEventDetails
 * @property ExecutionFailedEventDetails $executionFailedEventDetails
 * @property ExecutionStartedEventDetails $executionStartedEventDetails
 * @property ExecutionSucceededEventDetails $executionSucceededEventDetails
 * @property ExecutionAbortedEventDetails $executionAbortedEventDetails
 * @property ExecutionTimedOutEventDetails $executionTimedOutEventDetails
 * @property ExecutionRedrivenEventDetails $executionRedrivenEventDetails
 * @property MapStateStartedEventDetails $mapStateStartedEventDetails
 * @property MapIterationEventDetails $mapIterationStartedEventDetails
 * @property MapIterationEventDetails $mapIterationSucceededEventDetails
 * @property MapIterationEventDetails $mapIterationFailedEventDetails
 * @property MapIterationEventDetails $mapIterationAbortedEventDetails
 * @property LambdaFunctionFailedEventDetails $lambdaFunctionFailedEventDetails
 * @property LambdaFunctionScheduleFailedEventDetails $lambdaFunctionScheduleFailedEventDetails
 * @property LambdaFunctionScheduledEventDetails $lambdaFunctionScheduledEventDetails
 * @property LambdaFunctionStartFailedEventDetails $lambdaFunctionStartFailedEventDetails
 * @property LambdaFunctionSucceededEventDetails $lambdaFunctionSucceededEventDetails
 * @property LambdaFunctionTimedOutEventDetails $lambdaFunctionTimedOutEventDetails
 * @property StateEnteredEventDetails $stateEnteredEventDetails
 * @property StateExitedEventDetails $stateExitedEventDetails
 * @property MapRunStartedEventDetails $mapRunStartedEventDetails
 * @property MapRunFailedEventDetails $mapRunFailedEventDetails
 * @property MapRunRedrivenEventDetails $mapRunRedrivenEventDetails
 * @property EvaluationFailedEventDetails $evaluationFailedEventDetails
 */
class HistoryEvent extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     type: 'ActivityFailed'|'ActivityScheduled'|'ActivityScheduleFailed'|'ActivityStarted'|'ActivitySucceeded'|'ActivityTimedOut'|'ChoiceStateEntered'|'ChoiceStateExited'|'ExecutionAborted'|'ExecutionFailed'|'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionTimedOut'|'FailStateEntered'|'LambdaFunctionFailed'|'LambdaFunctionScheduled'|'LambdaFunctionScheduleFailed'|'LambdaFunctionStarted'|'LambdaFunctionStartFailed'|'LambdaFunctionSucceeded'|'LambdaFunctionTimedOut'|'MapIterationAborted'|'MapIterationFailed'|'MapIterationStarted'|'MapIterationSucceeded'|'MapStateAborted'|'MapStateEntered'|'MapStateExited'|'MapStateFailed'|'MapStateStarted'|'MapStateSucceeded'|'ParallelStateAborted'|'ParallelStateEntered'|'ParallelStateExited'|'ParallelStateFailed'|'ParallelStateStarted'|'ParallelStateSucceeded'|'PassStateEntered'|'PassStateExited'|'SucceedStateEntered'|'SucceedStateExited'|'TaskFailed'|'TaskScheduled'|'TaskStarted'|'TaskStartFailed'|'TaskStateAborted'|'TaskStateEntered'|'TaskStateExited'|'TaskSubmitFailed'|'TaskSubmitted'|'TaskSucceeded'|'TaskTimedOut'|'WaitStateAborted'|'WaitStateEntered'|'WaitStateExited'|'MapRunAborted'|'MapRunFailed'|'MapRunStarted'|'MapRunSucceeded'|'ExecutionRedriven'|'MapRunRedriven'|'EvaluationFailed',
     *     id: int,
     *     previousEventId?: int,
     *     activityFailedEventDetails?: ActivityFailedEventDetails,
     *     activityScheduleFailedEventDetails?: ActivityScheduleFailedEventDetails,
     *     activityScheduledEventDetails?: ActivityScheduledEventDetails,
     *     activityStartedEventDetails?: ActivityStartedEventDetails,
     *     activitySucceededEventDetails?: ActivitySucceededEventDetails,
     *     activityTimedOutEventDetails?: ActivityTimedOutEventDetails,
     *     taskFailedEventDetails?: TaskFailedEventDetails,
     *     taskScheduledEventDetails?: TaskScheduledEventDetails,
     *     taskStartFailedEventDetails?: TaskStartFailedEventDetails,
     *     taskStartedEventDetails?: TaskStartedEventDetails,
     *     taskSubmitFailedEventDetails?: TaskSubmitFailedEventDetails,
     *     taskSubmittedEventDetails?: TaskSubmittedEventDetails,
     *     taskSucceededEventDetails?: TaskSucceededEventDetails,
     *     taskTimedOutEventDetails?: TaskTimedOutEventDetails,
     *     executionFailedEventDetails?: ExecutionFailedEventDetails,
     *     executionStartedEventDetails?: ExecutionStartedEventDetails,
     *     executionSucceededEventDetails?: ExecutionSucceededEventDetails,
     *     executionAbortedEventDetails?: ExecutionAbortedEventDetails,
     *     executionTimedOutEventDetails?: ExecutionTimedOutEventDetails,
     *     executionRedrivenEventDetails?: ExecutionRedrivenEventDetails,
     *     mapStateStartedEventDetails?: MapStateStartedEventDetails,
     *     mapIterationStartedEventDetails?: MapIterationEventDetails,
     *     mapIterationSucceededEventDetails?: MapIterationEventDetails,
     *     mapIterationFailedEventDetails?: MapIterationEventDetails,
     *     mapIterationAbortedEventDetails?: MapIterationEventDetails,
     *     lambdaFunctionFailedEventDetails?: LambdaFunctionFailedEventDetails,
     *     lambdaFunctionScheduleFailedEventDetails?: LambdaFunctionScheduleFailedEventDetails,
     *     lambdaFunctionScheduledEventDetails?: LambdaFunctionScheduledEventDetails,
     *     lambdaFunctionStartFailedEventDetails?: LambdaFunctionStartFailedEventDetails,
     *     lambdaFunctionSucceededEventDetails?: LambdaFunctionSucceededEventDetails,
     *     lambdaFunctionTimedOutEventDetails?: LambdaFunctionTimedOutEventDetails,
     *     stateEnteredEventDetails?: StateEnteredEventDetails,
     *     stateExitedEventDetails?: StateExitedEventDetails,
     *     mapRunStartedEventDetails?: MapRunStartedEventDetails,
     *     mapRunFailedEventDetails?: MapRunFailedEventDetails,
     *     mapRunRedrivenEventDetails?: MapRunRedrivenEventDetails,
     *     evaluationFailedEventDetails?: EvaluationFailedEventDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
