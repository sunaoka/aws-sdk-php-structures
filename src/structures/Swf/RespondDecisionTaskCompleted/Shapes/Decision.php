<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ScheduleActivityTask'|'RequestCancelActivityTask'|'CompleteWorkflowExecution'|'FailWorkflowExecution'|'CancelWorkflowExecution'|'ContinueAsNewWorkflowExecution'|'RecordMarker'|'StartTimer'|'CancelTimer'|'SignalExternalWorkflowExecution'|'RequestCancelExternalWorkflowExecution'|'StartChildWorkflowExecution'|'ScheduleLambdaFunction' $decisionType
 * @property ScheduleActivityTaskDecisionAttributes|null $scheduleActivityTaskDecisionAttributes
 * @property RequestCancelActivityTaskDecisionAttributes|null $requestCancelActivityTaskDecisionAttributes
 * @property CompleteWorkflowExecutionDecisionAttributes|null $completeWorkflowExecutionDecisionAttributes
 * @property FailWorkflowExecutionDecisionAttributes|null $failWorkflowExecutionDecisionAttributes
 * @property CancelWorkflowExecutionDecisionAttributes|null $cancelWorkflowExecutionDecisionAttributes
 * @property ContinueAsNewWorkflowExecutionDecisionAttributes|null $continueAsNewWorkflowExecutionDecisionAttributes
 * @property RecordMarkerDecisionAttributes|null $recordMarkerDecisionAttributes
 * @property StartTimerDecisionAttributes|null $startTimerDecisionAttributes
 * @property CancelTimerDecisionAttributes|null $cancelTimerDecisionAttributes
 * @property SignalExternalWorkflowExecutionDecisionAttributes|null $signalExternalWorkflowExecutionDecisionAttributes
 * @property RequestCancelExternalWorkflowExecutionDecisionAttributes|null $requestCancelExternalWorkflowExecutionDecisionAttributes
 * @property StartChildWorkflowExecutionDecisionAttributes|null $startChildWorkflowExecutionDecisionAttributes
 * @property ScheduleLambdaFunctionDecisionAttributes|null $scheduleLambdaFunctionDecisionAttributes
 */
class Decision extends Shape
{
    /**
     * @param array{
     *     decisionType: 'ScheduleActivityTask'|'RequestCancelActivityTask'|'CompleteWorkflowExecution'|'FailWorkflowExecution'|'CancelWorkflowExecution'|'ContinueAsNewWorkflowExecution'|'RecordMarker'|'StartTimer'|'CancelTimer'|'SignalExternalWorkflowExecution'|'RequestCancelExternalWorkflowExecution'|'StartChildWorkflowExecution'|'ScheduleLambdaFunction',
     *     scheduleActivityTaskDecisionAttributes?: ScheduleActivityTaskDecisionAttributes|null,
     *     requestCancelActivityTaskDecisionAttributes?: RequestCancelActivityTaskDecisionAttributes|null,
     *     completeWorkflowExecutionDecisionAttributes?: CompleteWorkflowExecutionDecisionAttributes|null,
     *     failWorkflowExecutionDecisionAttributes?: FailWorkflowExecutionDecisionAttributes|null,
     *     cancelWorkflowExecutionDecisionAttributes?: CancelWorkflowExecutionDecisionAttributes|null,
     *     continueAsNewWorkflowExecutionDecisionAttributes?: ContinueAsNewWorkflowExecutionDecisionAttributes|null,
     *     recordMarkerDecisionAttributes?: RecordMarkerDecisionAttributes|null,
     *     startTimerDecisionAttributes?: StartTimerDecisionAttributes|null,
     *     cancelTimerDecisionAttributes?: CancelTimerDecisionAttributes|null,
     *     signalExternalWorkflowExecutionDecisionAttributes?: SignalExternalWorkflowExecutionDecisionAttributes|null,
     *     requestCancelExternalWorkflowExecutionDecisionAttributes?: RequestCancelExternalWorkflowExecutionDecisionAttributes|null,
     *     startChildWorkflowExecutionDecisionAttributes?: StartChildWorkflowExecutionDecisionAttributes|null,
     *     scheduleLambdaFunctionDecisionAttributes?: ScheduleLambdaFunctionDecisionAttributes|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
