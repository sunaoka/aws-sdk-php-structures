<?php

namespace Sunaoka\Aws\Structures\Sfn\GetExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $timestamp
 * @property 'ActivityFailed'|'ActivityScheduled'|'ActivityScheduleFailed'|'ActivityStarted'|'ActivitySucceeded'|'ActivityTimedOut'|'ChoiceStateEntered'|'ChoiceStateExited'|'ExecutionAborted'|'ExecutionFailed'|'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionTimedOut'|'FailStateEntered'|'LambdaFunctionFailed'|'LambdaFunctionScheduled'|'LambdaFunctionScheduleFailed'|'LambdaFunctionStarted'|'LambdaFunctionStartFailed'|'LambdaFunctionSucceeded'|'LambdaFunctionTimedOut'|'MapIterationAborted'|'MapIterationFailed'|'MapIterationStarted'|'MapIterationSucceeded'|'MapStateAborted'|'MapStateEntered'|'MapStateExited'|'MapStateFailed'|'MapStateStarted'|'MapStateSucceeded'|'ParallelStateAborted'|'ParallelStateEntered'|'ParallelStateExited'|'ParallelStateFailed'|'ParallelStateStarted'|'ParallelStateSucceeded'|'PassStateEntered'|'PassStateExited'|'SucceedStateEntered'|'SucceedStateExited'|'TaskFailed'|'TaskScheduled'|'TaskStarted'|'TaskStartFailed'|'TaskStateAborted'|'TaskStateEntered'|'TaskStateExited'|'TaskSubmitFailed'|'TaskSubmitted'|'TaskSucceeded'|'TaskTimedOut'|'WaitStateAborted'|'WaitStateEntered'|'WaitStateExited'|'MapRunAborted'|'MapRunFailed'|'MapRunStarted'|'MapRunSucceeded'|'ExecutionRedriven'|'MapRunRedriven'|'EvaluationFailed' $type
 * @property int $id
 * @property int|null $previousEventId
 * @property ActivityFailedEventDetails|null $activityFailedEventDetails
 * @property ActivityScheduleFailedEventDetails|null $activityScheduleFailedEventDetails
 * @property ActivityScheduledEventDetails|null $activityScheduledEventDetails
 * @property ActivityStartedEventDetails|null $activityStartedEventDetails
 * @property ActivitySucceededEventDetails|null $activitySucceededEventDetails
 * @property ActivityTimedOutEventDetails|null $activityTimedOutEventDetails
 * @property TaskFailedEventDetails|null $taskFailedEventDetails
 * @property TaskScheduledEventDetails|null $taskScheduledEventDetails
 * @property TaskStartFailedEventDetails|null $taskStartFailedEventDetails
 * @property TaskStartedEventDetails|null $taskStartedEventDetails
 * @property TaskSubmitFailedEventDetails|null $taskSubmitFailedEventDetails
 * @property TaskSubmittedEventDetails|null $taskSubmittedEventDetails
 * @property TaskSucceededEventDetails|null $taskSucceededEventDetails
 * @property TaskTimedOutEventDetails|null $taskTimedOutEventDetails
 * @property ExecutionFailedEventDetails|null $executionFailedEventDetails
 * @property ExecutionStartedEventDetails|null $executionStartedEventDetails
 * @property ExecutionSucceededEventDetails|null $executionSucceededEventDetails
 * @property ExecutionAbortedEventDetails|null $executionAbortedEventDetails
 * @property ExecutionTimedOutEventDetails|null $executionTimedOutEventDetails
 * @property ExecutionRedrivenEventDetails|null $executionRedrivenEventDetails
 * @property MapStateStartedEventDetails|null $mapStateStartedEventDetails
 * @property MapIterationEventDetails|null $mapIterationStartedEventDetails
 * @property MapIterationEventDetails|null $mapIterationSucceededEventDetails
 * @property MapIterationEventDetails|null $mapIterationFailedEventDetails
 * @property MapIterationEventDetails|null $mapIterationAbortedEventDetails
 * @property LambdaFunctionFailedEventDetails|null $lambdaFunctionFailedEventDetails
 * @property LambdaFunctionScheduleFailedEventDetails|null $lambdaFunctionScheduleFailedEventDetails
 * @property LambdaFunctionScheduledEventDetails|null $lambdaFunctionScheduledEventDetails
 * @property LambdaFunctionStartFailedEventDetails|null $lambdaFunctionStartFailedEventDetails
 * @property LambdaFunctionSucceededEventDetails|null $lambdaFunctionSucceededEventDetails
 * @property LambdaFunctionTimedOutEventDetails|null $lambdaFunctionTimedOutEventDetails
 * @property StateEnteredEventDetails|null $stateEnteredEventDetails
 * @property StateExitedEventDetails|null $stateExitedEventDetails
 * @property MapRunStartedEventDetails|null $mapRunStartedEventDetails
 * @property MapRunFailedEventDetails|null $mapRunFailedEventDetails
 * @property MapRunRedrivenEventDetails|null $mapRunRedrivenEventDetails
 * @property EvaluationFailedEventDetails|null $evaluationFailedEventDetails
 */
class HistoryEvent extends Shape
{
    /**
     * @param array{
     *     timestamp: \Aws\Api\DateTimeResult,
     *     type: 'ActivityFailed'|'ActivityScheduled'|'ActivityScheduleFailed'|'ActivityStarted'|'ActivitySucceeded'|'ActivityTimedOut'|'ChoiceStateEntered'|'ChoiceStateExited'|'ExecutionAborted'|'ExecutionFailed'|'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionTimedOut'|'FailStateEntered'|'LambdaFunctionFailed'|'LambdaFunctionScheduled'|'LambdaFunctionScheduleFailed'|'LambdaFunctionStarted'|'LambdaFunctionStartFailed'|'LambdaFunctionSucceeded'|'LambdaFunctionTimedOut'|'MapIterationAborted'|'MapIterationFailed'|'MapIterationStarted'|'MapIterationSucceeded'|'MapStateAborted'|'MapStateEntered'|'MapStateExited'|'MapStateFailed'|'MapStateStarted'|'MapStateSucceeded'|'ParallelStateAborted'|'ParallelStateEntered'|'ParallelStateExited'|'ParallelStateFailed'|'ParallelStateStarted'|'ParallelStateSucceeded'|'PassStateEntered'|'PassStateExited'|'SucceedStateEntered'|'SucceedStateExited'|'TaskFailed'|'TaskScheduled'|'TaskStarted'|'TaskStartFailed'|'TaskStateAborted'|'TaskStateEntered'|'TaskStateExited'|'TaskSubmitFailed'|'TaskSubmitted'|'TaskSucceeded'|'TaskTimedOut'|'WaitStateAborted'|'WaitStateEntered'|'WaitStateExited'|'MapRunAborted'|'MapRunFailed'|'MapRunStarted'|'MapRunSucceeded'|'ExecutionRedriven'|'MapRunRedriven'|'EvaluationFailed',
     *     id: int,
     *     previousEventId?: int|null,
     *     activityFailedEventDetails?: ActivityFailedEventDetails|null,
     *     activityScheduleFailedEventDetails?: ActivityScheduleFailedEventDetails|null,
     *     activityScheduledEventDetails?: ActivityScheduledEventDetails|null,
     *     activityStartedEventDetails?: ActivityStartedEventDetails|null,
     *     activitySucceededEventDetails?: ActivitySucceededEventDetails|null,
     *     activityTimedOutEventDetails?: ActivityTimedOutEventDetails|null,
     *     taskFailedEventDetails?: TaskFailedEventDetails|null,
     *     taskScheduledEventDetails?: TaskScheduledEventDetails|null,
     *     taskStartFailedEventDetails?: TaskStartFailedEventDetails|null,
     *     taskStartedEventDetails?: TaskStartedEventDetails|null,
     *     taskSubmitFailedEventDetails?: TaskSubmitFailedEventDetails|null,
     *     taskSubmittedEventDetails?: TaskSubmittedEventDetails|null,
     *     taskSucceededEventDetails?: TaskSucceededEventDetails|null,
     *     taskTimedOutEventDetails?: TaskTimedOutEventDetails|null,
     *     executionFailedEventDetails?: ExecutionFailedEventDetails|null,
     *     executionStartedEventDetails?: ExecutionStartedEventDetails|null,
     *     executionSucceededEventDetails?: ExecutionSucceededEventDetails|null,
     *     executionAbortedEventDetails?: ExecutionAbortedEventDetails|null,
     *     executionTimedOutEventDetails?: ExecutionTimedOutEventDetails|null,
     *     executionRedrivenEventDetails?: ExecutionRedrivenEventDetails|null,
     *     mapStateStartedEventDetails?: MapStateStartedEventDetails|null,
     *     mapIterationStartedEventDetails?: MapIterationEventDetails|null,
     *     mapIterationSucceededEventDetails?: MapIterationEventDetails|null,
     *     mapIterationFailedEventDetails?: MapIterationEventDetails|null,
     *     mapIterationAbortedEventDetails?: MapIterationEventDetails|null,
     *     lambdaFunctionFailedEventDetails?: LambdaFunctionFailedEventDetails|null,
     *     lambdaFunctionScheduleFailedEventDetails?: LambdaFunctionScheduleFailedEventDetails|null,
     *     lambdaFunctionScheduledEventDetails?: LambdaFunctionScheduledEventDetails|null,
     *     lambdaFunctionStartFailedEventDetails?: LambdaFunctionStartFailedEventDetails|null,
     *     lambdaFunctionSucceededEventDetails?: LambdaFunctionSucceededEventDetails|null,
     *     lambdaFunctionTimedOutEventDetails?: LambdaFunctionTimedOutEventDetails|null,
     *     stateEnteredEventDetails?: StateEnteredEventDetails|null,
     *     stateExitedEventDetails?: StateExitedEventDetails|null,
     *     mapRunStartedEventDetails?: MapRunStartedEventDetails|null,
     *     mapRunFailedEventDetails?: MapRunFailedEventDetails|null,
     *     mapRunRedrivenEventDetails?: MapRunRedrivenEventDetails|null,
     *     evaluationFailedEventDetails?: EvaluationFailedEventDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
