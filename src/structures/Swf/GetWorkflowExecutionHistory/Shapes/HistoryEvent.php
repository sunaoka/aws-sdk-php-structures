<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property 'WorkflowExecutionStarted'|'WorkflowExecutionCancelRequested'|'WorkflowExecutionCompleted'|'CompleteWorkflowExecutionFailed'|'WorkflowExecutionFailed'|'FailWorkflowExecutionFailed'|'WorkflowExecutionTimedOut'|'WorkflowExecutionCanceled'|'CancelWorkflowExecutionFailed'|'WorkflowExecutionContinuedAsNew'|'ContinueAsNewWorkflowExecutionFailed'|'WorkflowExecutionTerminated'|'DecisionTaskScheduled'|'DecisionTaskStarted'|'DecisionTaskCompleted'|'DecisionTaskTimedOut'|'ActivityTaskScheduled'|'ScheduleActivityTaskFailed'|'ActivityTaskStarted'|'ActivityTaskCompleted'|'ActivityTaskFailed'|'ActivityTaskTimedOut'|'ActivityTaskCanceled'|'ActivityTaskCancelRequested'|'RequestCancelActivityTaskFailed'|'WorkflowExecutionSignaled'|'MarkerRecorded'|'RecordMarkerFailed'|'TimerStarted'|'StartTimerFailed'|'TimerFired'|'TimerCanceled'|'CancelTimerFailed'|'StartChildWorkflowExecutionInitiated'|'StartChildWorkflowExecutionFailed'|'ChildWorkflowExecutionStarted'|'ChildWorkflowExecutionCompleted'|'ChildWorkflowExecutionFailed'|'ChildWorkflowExecutionTimedOut'|'ChildWorkflowExecutionCanceled'|'ChildWorkflowExecutionTerminated'|'SignalExternalWorkflowExecutionInitiated'|'SignalExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionSignaled'|'RequestCancelExternalWorkflowExecutionInitiated'|'RequestCancelExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionCancelRequested'|'LambdaFunctionScheduled'|'LambdaFunctionStarted'|'LambdaFunctionCompleted'|'LambdaFunctionFailed'|'LambdaFunctionTimedOut'|'ScheduleLambdaFunctionFailed'|'StartLambdaFunctionFailed' $eventType
 * @property int $eventId
 * @property WorkflowExecutionStartedEventAttributes|null $workflowExecutionStartedEventAttributes
 * @property WorkflowExecutionCompletedEventAttributes|null $workflowExecutionCompletedEventAttributes
 * @property CompleteWorkflowExecutionFailedEventAttributes|null $completeWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionFailedEventAttributes|null $workflowExecutionFailedEventAttributes
 * @property FailWorkflowExecutionFailedEventAttributes|null $failWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionTimedOutEventAttributes|null $workflowExecutionTimedOutEventAttributes
 * @property WorkflowExecutionCanceledEventAttributes|null $workflowExecutionCanceledEventAttributes
 * @property CancelWorkflowExecutionFailedEventAttributes|null $cancelWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionContinuedAsNewEventAttributes|null $workflowExecutionContinuedAsNewEventAttributes
 * @property ContinueAsNewWorkflowExecutionFailedEventAttributes|null $continueAsNewWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionTerminatedEventAttributes|null $workflowExecutionTerminatedEventAttributes
 * @property WorkflowExecutionCancelRequestedEventAttributes|null $workflowExecutionCancelRequestedEventAttributes
 * @property DecisionTaskScheduledEventAttributes|null $decisionTaskScheduledEventAttributes
 * @property DecisionTaskStartedEventAttributes|null $decisionTaskStartedEventAttributes
 * @property DecisionTaskCompletedEventAttributes|null $decisionTaskCompletedEventAttributes
 * @property DecisionTaskTimedOutEventAttributes|null $decisionTaskTimedOutEventAttributes
 * @property ActivityTaskScheduledEventAttributes|null $activityTaskScheduledEventAttributes
 * @property ActivityTaskStartedEventAttributes|null $activityTaskStartedEventAttributes
 * @property ActivityTaskCompletedEventAttributes|null $activityTaskCompletedEventAttributes
 * @property ActivityTaskFailedEventAttributes|null $activityTaskFailedEventAttributes
 * @property ActivityTaskTimedOutEventAttributes|null $activityTaskTimedOutEventAttributes
 * @property ActivityTaskCanceledEventAttributes|null $activityTaskCanceledEventAttributes
 * @property ActivityTaskCancelRequestedEventAttributes|null $activityTaskCancelRequestedEventAttributes
 * @property WorkflowExecutionSignaledEventAttributes|null $workflowExecutionSignaledEventAttributes
 * @property MarkerRecordedEventAttributes|null $markerRecordedEventAttributes
 * @property RecordMarkerFailedEventAttributes|null $recordMarkerFailedEventAttributes
 * @property TimerStartedEventAttributes|null $timerStartedEventAttributes
 * @property TimerFiredEventAttributes|null $timerFiredEventAttributes
 * @property TimerCanceledEventAttributes|null $timerCanceledEventAttributes
 * @property StartChildWorkflowExecutionInitiatedEventAttributes|null $startChildWorkflowExecutionInitiatedEventAttributes
 * @property ChildWorkflowExecutionStartedEventAttributes|null $childWorkflowExecutionStartedEventAttributes
 * @property ChildWorkflowExecutionCompletedEventAttributes|null $childWorkflowExecutionCompletedEventAttributes
 * @property ChildWorkflowExecutionFailedEventAttributes|null $childWorkflowExecutionFailedEventAttributes
 * @property ChildWorkflowExecutionTimedOutEventAttributes|null $childWorkflowExecutionTimedOutEventAttributes
 * @property ChildWorkflowExecutionCanceledEventAttributes|null $childWorkflowExecutionCanceledEventAttributes
 * @property ChildWorkflowExecutionTerminatedEventAttributes|null $childWorkflowExecutionTerminatedEventAttributes
 * @property SignalExternalWorkflowExecutionInitiatedEventAttributes|null $signalExternalWorkflowExecutionInitiatedEventAttributes
 * @property ExternalWorkflowExecutionSignaledEventAttributes|null $externalWorkflowExecutionSignaledEventAttributes
 * @property SignalExternalWorkflowExecutionFailedEventAttributes|null $signalExternalWorkflowExecutionFailedEventAttributes
 * @property ExternalWorkflowExecutionCancelRequestedEventAttributes|null $externalWorkflowExecutionCancelRequestedEventAttributes
 * @property RequestCancelExternalWorkflowExecutionInitiatedEventAttributes|null $requestCancelExternalWorkflowExecutionInitiatedEventAttributes
 * @property RequestCancelExternalWorkflowExecutionFailedEventAttributes|null $requestCancelExternalWorkflowExecutionFailedEventAttributes
 * @property ScheduleActivityTaskFailedEventAttributes|null $scheduleActivityTaskFailedEventAttributes
 * @property RequestCancelActivityTaskFailedEventAttributes|null $requestCancelActivityTaskFailedEventAttributes
 * @property StartTimerFailedEventAttributes|null $startTimerFailedEventAttributes
 * @property CancelTimerFailedEventAttributes|null $cancelTimerFailedEventAttributes
 * @property StartChildWorkflowExecutionFailedEventAttributes|null $startChildWorkflowExecutionFailedEventAttributes
 * @property LambdaFunctionScheduledEventAttributes|null $lambdaFunctionScheduledEventAttributes
 * @property LambdaFunctionStartedEventAttributes|null $lambdaFunctionStartedEventAttributes
 * @property LambdaFunctionCompletedEventAttributes|null $lambdaFunctionCompletedEventAttributes
 * @property LambdaFunctionFailedEventAttributes|null $lambdaFunctionFailedEventAttributes
 * @property LambdaFunctionTimedOutEventAttributes|null $lambdaFunctionTimedOutEventAttributes
 * @property ScheduleLambdaFunctionFailedEventAttributes|null $scheduleLambdaFunctionFailedEventAttributes
 * @property StartLambdaFunctionFailedEventAttributes|null $startLambdaFunctionFailedEventAttributes
 */
class HistoryEvent extends Shape
{
    /**
     * @param array{
     *     eventTimestamp: \Aws\Api\DateTimeResult,
     *     eventType: 'WorkflowExecutionStarted'|'WorkflowExecutionCancelRequested'|'WorkflowExecutionCompleted'|'CompleteWorkflowExecutionFailed'|'WorkflowExecutionFailed'|'FailWorkflowExecutionFailed'|'WorkflowExecutionTimedOut'|'WorkflowExecutionCanceled'|'CancelWorkflowExecutionFailed'|'WorkflowExecutionContinuedAsNew'|'ContinueAsNewWorkflowExecutionFailed'|'WorkflowExecutionTerminated'|'DecisionTaskScheduled'|'DecisionTaskStarted'|'DecisionTaskCompleted'|'DecisionTaskTimedOut'|'ActivityTaskScheduled'|'ScheduleActivityTaskFailed'|'ActivityTaskStarted'|'ActivityTaskCompleted'|'ActivityTaskFailed'|'ActivityTaskTimedOut'|'ActivityTaskCanceled'|'ActivityTaskCancelRequested'|'RequestCancelActivityTaskFailed'|'WorkflowExecutionSignaled'|'MarkerRecorded'|'RecordMarkerFailed'|'TimerStarted'|'StartTimerFailed'|'TimerFired'|'TimerCanceled'|'CancelTimerFailed'|'StartChildWorkflowExecutionInitiated'|'StartChildWorkflowExecutionFailed'|'ChildWorkflowExecutionStarted'|'ChildWorkflowExecutionCompleted'|'ChildWorkflowExecutionFailed'|'ChildWorkflowExecutionTimedOut'|'ChildWorkflowExecutionCanceled'|'ChildWorkflowExecutionTerminated'|'SignalExternalWorkflowExecutionInitiated'|'SignalExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionSignaled'|'RequestCancelExternalWorkflowExecutionInitiated'|'RequestCancelExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionCancelRequested'|'LambdaFunctionScheduled'|'LambdaFunctionStarted'|'LambdaFunctionCompleted'|'LambdaFunctionFailed'|'LambdaFunctionTimedOut'|'ScheduleLambdaFunctionFailed'|'StartLambdaFunctionFailed',
     *     eventId: int,
     *     workflowExecutionStartedEventAttributes?: WorkflowExecutionStartedEventAttributes|null,
     *     workflowExecutionCompletedEventAttributes?: WorkflowExecutionCompletedEventAttributes|null,
     *     completeWorkflowExecutionFailedEventAttributes?: CompleteWorkflowExecutionFailedEventAttributes|null,
     *     workflowExecutionFailedEventAttributes?: WorkflowExecutionFailedEventAttributes|null,
     *     failWorkflowExecutionFailedEventAttributes?: FailWorkflowExecutionFailedEventAttributes|null,
     *     workflowExecutionTimedOutEventAttributes?: WorkflowExecutionTimedOutEventAttributes|null,
     *     workflowExecutionCanceledEventAttributes?: WorkflowExecutionCanceledEventAttributes|null,
     *     cancelWorkflowExecutionFailedEventAttributes?: CancelWorkflowExecutionFailedEventAttributes|null,
     *     workflowExecutionContinuedAsNewEventAttributes?: WorkflowExecutionContinuedAsNewEventAttributes|null,
     *     continueAsNewWorkflowExecutionFailedEventAttributes?: ContinueAsNewWorkflowExecutionFailedEventAttributes|null,
     *     workflowExecutionTerminatedEventAttributes?: WorkflowExecutionTerminatedEventAttributes|null,
     *     workflowExecutionCancelRequestedEventAttributes?: WorkflowExecutionCancelRequestedEventAttributes|null,
     *     decisionTaskScheduledEventAttributes?: DecisionTaskScheduledEventAttributes|null,
     *     decisionTaskStartedEventAttributes?: DecisionTaskStartedEventAttributes|null,
     *     decisionTaskCompletedEventAttributes?: DecisionTaskCompletedEventAttributes|null,
     *     decisionTaskTimedOutEventAttributes?: DecisionTaskTimedOutEventAttributes|null,
     *     activityTaskScheduledEventAttributes?: ActivityTaskScheduledEventAttributes|null,
     *     activityTaskStartedEventAttributes?: ActivityTaskStartedEventAttributes|null,
     *     activityTaskCompletedEventAttributes?: ActivityTaskCompletedEventAttributes|null,
     *     activityTaskFailedEventAttributes?: ActivityTaskFailedEventAttributes|null,
     *     activityTaskTimedOutEventAttributes?: ActivityTaskTimedOutEventAttributes|null,
     *     activityTaskCanceledEventAttributes?: ActivityTaskCanceledEventAttributes|null,
     *     activityTaskCancelRequestedEventAttributes?: ActivityTaskCancelRequestedEventAttributes|null,
     *     workflowExecutionSignaledEventAttributes?: WorkflowExecutionSignaledEventAttributes|null,
     *     markerRecordedEventAttributes?: MarkerRecordedEventAttributes|null,
     *     recordMarkerFailedEventAttributes?: RecordMarkerFailedEventAttributes|null,
     *     timerStartedEventAttributes?: TimerStartedEventAttributes|null,
     *     timerFiredEventAttributes?: TimerFiredEventAttributes|null,
     *     timerCanceledEventAttributes?: TimerCanceledEventAttributes|null,
     *     startChildWorkflowExecutionInitiatedEventAttributes?: StartChildWorkflowExecutionInitiatedEventAttributes|null,
     *     childWorkflowExecutionStartedEventAttributes?: ChildWorkflowExecutionStartedEventAttributes|null,
     *     childWorkflowExecutionCompletedEventAttributes?: ChildWorkflowExecutionCompletedEventAttributes|null,
     *     childWorkflowExecutionFailedEventAttributes?: ChildWorkflowExecutionFailedEventAttributes|null,
     *     childWorkflowExecutionTimedOutEventAttributes?: ChildWorkflowExecutionTimedOutEventAttributes|null,
     *     childWorkflowExecutionCanceledEventAttributes?: ChildWorkflowExecutionCanceledEventAttributes|null,
     *     childWorkflowExecutionTerminatedEventAttributes?: ChildWorkflowExecutionTerminatedEventAttributes|null,
     *     signalExternalWorkflowExecutionInitiatedEventAttributes?: SignalExternalWorkflowExecutionInitiatedEventAttributes|null,
     *     externalWorkflowExecutionSignaledEventAttributes?: ExternalWorkflowExecutionSignaledEventAttributes|null,
     *     signalExternalWorkflowExecutionFailedEventAttributes?: SignalExternalWorkflowExecutionFailedEventAttributes|null,
     *     externalWorkflowExecutionCancelRequestedEventAttributes?: ExternalWorkflowExecutionCancelRequestedEventAttributes|null,
     *     requestCancelExternalWorkflowExecutionInitiatedEventAttributes?: RequestCancelExternalWorkflowExecutionInitiatedEventAttributes|null,
     *     requestCancelExternalWorkflowExecutionFailedEventAttributes?: RequestCancelExternalWorkflowExecutionFailedEventAttributes|null,
     *     scheduleActivityTaskFailedEventAttributes?: ScheduleActivityTaskFailedEventAttributes|null,
     *     requestCancelActivityTaskFailedEventAttributes?: RequestCancelActivityTaskFailedEventAttributes|null,
     *     startTimerFailedEventAttributes?: StartTimerFailedEventAttributes|null,
     *     cancelTimerFailedEventAttributes?: CancelTimerFailedEventAttributes|null,
     *     startChildWorkflowExecutionFailedEventAttributes?: StartChildWorkflowExecutionFailedEventAttributes|null,
     *     lambdaFunctionScheduledEventAttributes?: LambdaFunctionScheduledEventAttributes|null,
     *     lambdaFunctionStartedEventAttributes?: LambdaFunctionStartedEventAttributes|null,
     *     lambdaFunctionCompletedEventAttributes?: LambdaFunctionCompletedEventAttributes|null,
     *     lambdaFunctionFailedEventAttributes?: LambdaFunctionFailedEventAttributes|null,
     *     lambdaFunctionTimedOutEventAttributes?: LambdaFunctionTimedOutEventAttributes|null,
     *     scheduleLambdaFunctionFailedEventAttributes?: ScheduleLambdaFunctionFailedEventAttributes|null,
     *     startLambdaFunctionFailedEventAttributes?: StartLambdaFunctionFailedEventAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
