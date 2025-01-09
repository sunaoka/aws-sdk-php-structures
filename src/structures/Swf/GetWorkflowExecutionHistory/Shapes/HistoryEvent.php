<?php

namespace Sunaoka\Aws\Structures\Swf\GetWorkflowExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property 'WorkflowExecutionStarted'|'WorkflowExecutionCancelRequested'|'WorkflowExecutionCompleted'|'CompleteWorkflowExecutionFailed'|'WorkflowExecutionFailed'|'FailWorkflowExecutionFailed'|'WorkflowExecutionTimedOut'|'WorkflowExecutionCanceled'|'CancelWorkflowExecutionFailed'|'WorkflowExecutionContinuedAsNew'|'ContinueAsNewWorkflowExecutionFailed'|'WorkflowExecutionTerminated'|'DecisionTaskScheduled'|'DecisionTaskStarted'|'DecisionTaskCompleted'|'DecisionTaskTimedOut'|'ActivityTaskScheduled'|'ScheduleActivityTaskFailed'|'ActivityTaskStarted'|'ActivityTaskCompleted'|'ActivityTaskFailed'|'ActivityTaskTimedOut'|'ActivityTaskCanceled'|'ActivityTaskCancelRequested'|'RequestCancelActivityTaskFailed'|'WorkflowExecutionSignaled'|'MarkerRecorded'|'RecordMarkerFailed'|'TimerStarted'|'StartTimerFailed'|'TimerFired'|'TimerCanceled'|'CancelTimerFailed'|'StartChildWorkflowExecutionInitiated'|'StartChildWorkflowExecutionFailed'|'ChildWorkflowExecutionStarted'|'ChildWorkflowExecutionCompleted'|'ChildWorkflowExecutionFailed'|'ChildWorkflowExecutionTimedOut'|'ChildWorkflowExecutionCanceled'|'ChildWorkflowExecutionTerminated'|'SignalExternalWorkflowExecutionInitiated'|'SignalExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionSignaled'|'RequestCancelExternalWorkflowExecutionInitiated'|'RequestCancelExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionCancelRequested'|'LambdaFunctionScheduled'|'LambdaFunctionStarted'|'LambdaFunctionCompleted'|'LambdaFunctionFailed'|'LambdaFunctionTimedOut'|'ScheduleLambdaFunctionFailed'|'StartLambdaFunctionFailed' $eventType
 * @property int $eventId
 * @property WorkflowExecutionStartedEventAttributes $workflowExecutionStartedEventAttributes
 * @property WorkflowExecutionCompletedEventAttributes $workflowExecutionCompletedEventAttributes
 * @property CompleteWorkflowExecutionFailedEventAttributes $completeWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionFailedEventAttributes $workflowExecutionFailedEventAttributes
 * @property FailWorkflowExecutionFailedEventAttributes $failWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionTimedOutEventAttributes $workflowExecutionTimedOutEventAttributes
 * @property WorkflowExecutionCanceledEventAttributes $workflowExecutionCanceledEventAttributes
 * @property CancelWorkflowExecutionFailedEventAttributes $cancelWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionContinuedAsNewEventAttributes $workflowExecutionContinuedAsNewEventAttributes
 * @property ContinueAsNewWorkflowExecutionFailedEventAttributes $continueAsNewWorkflowExecutionFailedEventAttributes
 * @property WorkflowExecutionTerminatedEventAttributes $workflowExecutionTerminatedEventAttributes
 * @property WorkflowExecutionCancelRequestedEventAttributes $workflowExecutionCancelRequestedEventAttributes
 * @property DecisionTaskScheduledEventAttributes $decisionTaskScheduledEventAttributes
 * @property DecisionTaskStartedEventAttributes $decisionTaskStartedEventAttributes
 * @property DecisionTaskCompletedEventAttributes $decisionTaskCompletedEventAttributes
 * @property DecisionTaskTimedOutEventAttributes $decisionTaskTimedOutEventAttributes
 * @property ActivityTaskScheduledEventAttributes $activityTaskScheduledEventAttributes
 * @property ActivityTaskStartedEventAttributes $activityTaskStartedEventAttributes
 * @property ActivityTaskCompletedEventAttributes $activityTaskCompletedEventAttributes
 * @property ActivityTaskFailedEventAttributes $activityTaskFailedEventAttributes
 * @property ActivityTaskTimedOutEventAttributes $activityTaskTimedOutEventAttributes
 * @property ActivityTaskCanceledEventAttributes $activityTaskCanceledEventAttributes
 * @property ActivityTaskCancelRequestedEventAttributes $activityTaskCancelRequestedEventAttributes
 * @property WorkflowExecutionSignaledEventAttributes $workflowExecutionSignaledEventAttributes
 * @property MarkerRecordedEventAttributes $markerRecordedEventAttributes
 * @property RecordMarkerFailedEventAttributes $recordMarkerFailedEventAttributes
 * @property TimerStartedEventAttributes $timerStartedEventAttributes
 * @property TimerFiredEventAttributes $timerFiredEventAttributes
 * @property TimerCanceledEventAttributes $timerCanceledEventAttributes
 * @property StartChildWorkflowExecutionInitiatedEventAttributes $startChildWorkflowExecutionInitiatedEventAttributes
 * @property ChildWorkflowExecutionStartedEventAttributes $childWorkflowExecutionStartedEventAttributes
 * @property ChildWorkflowExecutionCompletedEventAttributes $childWorkflowExecutionCompletedEventAttributes
 * @property ChildWorkflowExecutionFailedEventAttributes $childWorkflowExecutionFailedEventAttributes
 * @property ChildWorkflowExecutionTimedOutEventAttributes $childWorkflowExecutionTimedOutEventAttributes
 * @property ChildWorkflowExecutionCanceledEventAttributes $childWorkflowExecutionCanceledEventAttributes
 * @property ChildWorkflowExecutionTerminatedEventAttributes $childWorkflowExecutionTerminatedEventAttributes
 * @property SignalExternalWorkflowExecutionInitiatedEventAttributes $signalExternalWorkflowExecutionInitiatedEventAttributes
 * @property ExternalWorkflowExecutionSignaledEventAttributes $externalWorkflowExecutionSignaledEventAttributes
 * @property SignalExternalWorkflowExecutionFailedEventAttributes $signalExternalWorkflowExecutionFailedEventAttributes
 * @property ExternalWorkflowExecutionCancelRequestedEventAttributes $externalWorkflowExecutionCancelRequestedEventAttributes
 * @property RequestCancelExternalWorkflowExecutionInitiatedEventAttributes $requestCancelExternalWorkflowExecutionInitiatedEventAttributes
 * @property RequestCancelExternalWorkflowExecutionFailedEventAttributes $requestCancelExternalWorkflowExecutionFailedEventAttributes
 * @property ScheduleActivityTaskFailedEventAttributes $scheduleActivityTaskFailedEventAttributes
 * @property RequestCancelActivityTaskFailedEventAttributes $requestCancelActivityTaskFailedEventAttributes
 * @property StartTimerFailedEventAttributes $startTimerFailedEventAttributes
 * @property CancelTimerFailedEventAttributes $cancelTimerFailedEventAttributes
 * @property StartChildWorkflowExecutionFailedEventAttributes $startChildWorkflowExecutionFailedEventAttributes
 * @property LambdaFunctionScheduledEventAttributes $lambdaFunctionScheduledEventAttributes
 * @property LambdaFunctionStartedEventAttributes $lambdaFunctionStartedEventAttributes
 * @property LambdaFunctionCompletedEventAttributes $lambdaFunctionCompletedEventAttributes
 * @property LambdaFunctionFailedEventAttributes $lambdaFunctionFailedEventAttributes
 * @property LambdaFunctionTimedOutEventAttributes $lambdaFunctionTimedOutEventAttributes
 * @property ScheduleLambdaFunctionFailedEventAttributes $scheduleLambdaFunctionFailedEventAttributes
 * @property StartLambdaFunctionFailedEventAttributes $startLambdaFunctionFailedEventAttributes
 */
class HistoryEvent extends Shape
{
    /**
     * @param array{
     *     eventTimestamp: \Aws\Api\DateTimeResult,
     *     eventType: 'WorkflowExecutionStarted'|'WorkflowExecutionCancelRequested'|'WorkflowExecutionCompleted'|'CompleteWorkflowExecutionFailed'|'WorkflowExecutionFailed'|'FailWorkflowExecutionFailed'|'WorkflowExecutionTimedOut'|'WorkflowExecutionCanceled'|'CancelWorkflowExecutionFailed'|'WorkflowExecutionContinuedAsNew'|'ContinueAsNewWorkflowExecutionFailed'|'WorkflowExecutionTerminated'|'DecisionTaskScheduled'|'DecisionTaskStarted'|'DecisionTaskCompleted'|'DecisionTaskTimedOut'|'ActivityTaskScheduled'|'ScheduleActivityTaskFailed'|'ActivityTaskStarted'|'ActivityTaskCompleted'|'ActivityTaskFailed'|'ActivityTaskTimedOut'|'ActivityTaskCanceled'|'ActivityTaskCancelRequested'|'RequestCancelActivityTaskFailed'|'WorkflowExecutionSignaled'|'MarkerRecorded'|'RecordMarkerFailed'|'TimerStarted'|'StartTimerFailed'|'TimerFired'|'TimerCanceled'|'CancelTimerFailed'|'StartChildWorkflowExecutionInitiated'|'StartChildWorkflowExecutionFailed'|'ChildWorkflowExecutionStarted'|'ChildWorkflowExecutionCompleted'|'ChildWorkflowExecutionFailed'|'ChildWorkflowExecutionTimedOut'|'ChildWorkflowExecutionCanceled'|'ChildWorkflowExecutionTerminated'|'SignalExternalWorkflowExecutionInitiated'|'SignalExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionSignaled'|'RequestCancelExternalWorkflowExecutionInitiated'|'RequestCancelExternalWorkflowExecutionFailed'|'ExternalWorkflowExecutionCancelRequested'|'LambdaFunctionScheduled'|'LambdaFunctionStarted'|'LambdaFunctionCompleted'|'LambdaFunctionFailed'|'LambdaFunctionTimedOut'|'ScheduleLambdaFunctionFailed'|'StartLambdaFunctionFailed',
     *     eventId: int,
     *     workflowExecutionStartedEventAttributes?: WorkflowExecutionStartedEventAttributes,
     *     workflowExecutionCompletedEventAttributes?: WorkflowExecutionCompletedEventAttributes,
     *     completeWorkflowExecutionFailedEventAttributes?: CompleteWorkflowExecutionFailedEventAttributes,
     *     workflowExecutionFailedEventAttributes?: WorkflowExecutionFailedEventAttributes,
     *     failWorkflowExecutionFailedEventAttributes?: FailWorkflowExecutionFailedEventAttributes,
     *     workflowExecutionTimedOutEventAttributes?: WorkflowExecutionTimedOutEventAttributes,
     *     workflowExecutionCanceledEventAttributes?: WorkflowExecutionCanceledEventAttributes,
     *     cancelWorkflowExecutionFailedEventAttributes?: CancelWorkflowExecutionFailedEventAttributes,
     *     workflowExecutionContinuedAsNewEventAttributes?: WorkflowExecutionContinuedAsNewEventAttributes,
     *     continueAsNewWorkflowExecutionFailedEventAttributes?: ContinueAsNewWorkflowExecutionFailedEventAttributes,
     *     workflowExecutionTerminatedEventAttributes?: WorkflowExecutionTerminatedEventAttributes,
     *     workflowExecutionCancelRequestedEventAttributes?: WorkflowExecutionCancelRequestedEventAttributes,
     *     decisionTaskScheduledEventAttributes?: DecisionTaskScheduledEventAttributes,
     *     decisionTaskStartedEventAttributes?: DecisionTaskStartedEventAttributes,
     *     decisionTaskCompletedEventAttributes?: DecisionTaskCompletedEventAttributes,
     *     decisionTaskTimedOutEventAttributes?: DecisionTaskTimedOutEventAttributes,
     *     activityTaskScheduledEventAttributes?: ActivityTaskScheduledEventAttributes,
     *     activityTaskStartedEventAttributes?: ActivityTaskStartedEventAttributes,
     *     activityTaskCompletedEventAttributes?: ActivityTaskCompletedEventAttributes,
     *     activityTaskFailedEventAttributes?: ActivityTaskFailedEventAttributes,
     *     activityTaskTimedOutEventAttributes?: ActivityTaskTimedOutEventAttributes,
     *     activityTaskCanceledEventAttributes?: ActivityTaskCanceledEventAttributes,
     *     activityTaskCancelRequestedEventAttributes?: ActivityTaskCancelRequestedEventAttributes,
     *     workflowExecutionSignaledEventAttributes?: WorkflowExecutionSignaledEventAttributes,
     *     markerRecordedEventAttributes?: MarkerRecordedEventAttributes,
     *     recordMarkerFailedEventAttributes?: RecordMarkerFailedEventAttributes,
     *     timerStartedEventAttributes?: TimerStartedEventAttributes,
     *     timerFiredEventAttributes?: TimerFiredEventAttributes,
     *     timerCanceledEventAttributes?: TimerCanceledEventAttributes,
     *     startChildWorkflowExecutionInitiatedEventAttributes?: StartChildWorkflowExecutionInitiatedEventAttributes,
     *     childWorkflowExecutionStartedEventAttributes?: ChildWorkflowExecutionStartedEventAttributes,
     *     childWorkflowExecutionCompletedEventAttributes?: ChildWorkflowExecutionCompletedEventAttributes,
     *     childWorkflowExecutionFailedEventAttributes?: ChildWorkflowExecutionFailedEventAttributes,
     *     childWorkflowExecutionTimedOutEventAttributes?: ChildWorkflowExecutionTimedOutEventAttributes,
     *     childWorkflowExecutionCanceledEventAttributes?: ChildWorkflowExecutionCanceledEventAttributes,
     *     childWorkflowExecutionTerminatedEventAttributes?: ChildWorkflowExecutionTerminatedEventAttributes,
     *     signalExternalWorkflowExecutionInitiatedEventAttributes?: SignalExternalWorkflowExecutionInitiatedEventAttributes,
     *     externalWorkflowExecutionSignaledEventAttributes?: ExternalWorkflowExecutionSignaledEventAttributes,
     *     signalExternalWorkflowExecutionFailedEventAttributes?: SignalExternalWorkflowExecutionFailedEventAttributes,
     *     externalWorkflowExecutionCancelRequestedEventAttributes?: ExternalWorkflowExecutionCancelRequestedEventAttributes,
     *     requestCancelExternalWorkflowExecutionInitiatedEventAttributes?: RequestCancelExternalWorkflowExecutionInitiatedEventAttributes,
     *     requestCancelExternalWorkflowExecutionFailedEventAttributes?: RequestCancelExternalWorkflowExecutionFailedEventAttributes,
     *     scheduleActivityTaskFailedEventAttributes?: ScheduleActivityTaskFailedEventAttributes,
     *     requestCancelActivityTaskFailedEventAttributes?: RequestCancelActivityTaskFailedEventAttributes,
     *     startTimerFailedEventAttributes?: StartTimerFailedEventAttributes,
     *     cancelTimerFailedEventAttributes?: CancelTimerFailedEventAttributes,
     *     startChildWorkflowExecutionFailedEventAttributes?: StartChildWorkflowExecutionFailedEventAttributes,
     *     lambdaFunctionScheduledEventAttributes?: LambdaFunctionScheduledEventAttributes,
     *     lambdaFunctionStartedEventAttributes?: LambdaFunctionStartedEventAttributes,
     *     lambdaFunctionCompletedEventAttributes?: LambdaFunctionCompletedEventAttributes,
     *     lambdaFunctionFailedEventAttributes?: LambdaFunctionFailedEventAttributes,
     *     lambdaFunctionTimedOutEventAttributes?: LambdaFunctionTimedOutEventAttributes,
     *     scheduleLambdaFunctionFailedEventAttributes?: ScheduleLambdaFunctionFailedEventAttributes,
     *     startLambdaFunctionFailedEventAttributes?: StartLambdaFunctionFailedEventAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
