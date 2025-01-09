<?php

namespace Sunaoka\Aws\Structures\Swf\RespondDecisionTaskCompleted\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ScheduleActivityTask'|'RequestCancelActivityTask'|'CompleteWorkflowExecution'|'FailWorkflowExecution'|'CancelWorkflowExecution'|'ContinueAsNewWorkflowExecution'|'RecordMarker'|'StartTimer'|'CancelTimer'|'SignalExternalWorkflowExecution'|'RequestCancelExternalWorkflowExecution'|'StartChildWorkflowExecution'|'ScheduleLambdaFunction' $decisionType
 * @property ScheduleActivityTaskDecisionAttributes $scheduleActivityTaskDecisionAttributes
 * @property RequestCancelActivityTaskDecisionAttributes $requestCancelActivityTaskDecisionAttributes
 * @property CompleteWorkflowExecutionDecisionAttributes $completeWorkflowExecutionDecisionAttributes
 * @property FailWorkflowExecutionDecisionAttributes $failWorkflowExecutionDecisionAttributes
 * @property CancelWorkflowExecutionDecisionAttributes $cancelWorkflowExecutionDecisionAttributes
 * @property ContinueAsNewWorkflowExecutionDecisionAttributes $continueAsNewWorkflowExecutionDecisionAttributes
 * @property RecordMarkerDecisionAttributes $recordMarkerDecisionAttributes
 * @property StartTimerDecisionAttributes $startTimerDecisionAttributes
 * @property CancelTimerDecisionAttributes $cancelTimerDecisionAttributes
 * @property SignalExternalWorkflowExecutionDecisionAttributes $signalExternalWorkflowExecutionDecisionAttributes
 * @property RequestCancelExternalWorkflowExecutionDecisionAttributes $requestCancelExternalWorkflowExecutionDecisionAttributes
 * @property StartChildWorkflowExecutionDecisionAttributes $startChildWorkflowExecutionDecisionAttributes
 * @property ScheduleLambdaFunctionDecisionAttributes $scheduleLambdaFunctionDecisionAttributes
 */
class Decision extends Shape
{
    /**
     * @param array{
     *     decisionType: 'ScheduleActivityTask'|'RequestCancelActivityTask'|'CompleteWorkflowExecution'|'FailWorkflowExecution'|'CancelWorkflowExecution'|'ContinueAsNewWorkflowExecution'|'RecordMarker'|'StartTimer'|'CancelTimer'|'SignalExternalWorkflowExecution'|'RequestCancelExternalWorkflowExecution'|'StartChildWorkflowExecution'|'ScheduleLambdaFunction',
     *     scheduleActivityTaskDecisionAttributes?: ScheduleActivityTaskDecisionAttributes,
     *     requestCancelActivityTaskDecisionAttributes?: RequestCancelActivityTaskDecisionAttributes,
     *     completeWorkflowExecutionDecisionAttributes?: CompleteWorkflowExecutionDecisionAttributes,
     *     failWorkflowExecutionDecisionAttributes?: FailWorkflowExecutionDecisionAttributes,
     *     cancelWorkflowExecutionDecisionAttributes?: CancelWorkflowExecutionDecisionAttributes,
     *     continueAsNewWorkflowExecutionDecisionAttributes?: ContinueAsNewWorkflowExecutionDecisionAttributes,
     *     recordMarkerDecisionAttributes?: RecordMarkerDecisionAttributes,
     *     startTimerDecisionAttributes?: StartTimerDecisionAttributes,
     *     cancelTimerDecisionAttributes?: CancelTimerDecisionAttributes,
     *     signalExternalWorkflowExecutionDecisionAttributes?: SignalExternalWorkflowExecutionDecisionAttributes,
     *     requestCancelExternalWorkflowExecutionDecisionAttributes?: RequestCancelExternalWorkflowExecutionDecisionAttributes,
     *     startChildWorkflowExecutionDecisionAttributes?: StartChildWorkflowExecutionDecisionAttributes,
     *     scheduleLambdaFunctionDecisionAttributes?: ScheduleLambdaFunctionDecisionAttributes
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
