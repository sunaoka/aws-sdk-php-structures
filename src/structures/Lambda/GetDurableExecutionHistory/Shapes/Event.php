<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionFailed'|'ExecutionTimedOut'|'ExecutionStopped'|'ContextStarted'|'ContextSucceeded'|'ContextFailed'|'WaitStarted'|'WaitSucceeded'|'WaitCancelled'|'StepStarted'|'StepSucceeded'|'StepFailed'|'ChainedInvokeStarted'|'ChainedInvokeSucceeded'|'ChainedInvokeFailed'|'ChainedInvokeTimedOut'|'ChainedInvokeStopped'|'CallbackStarted'|'CallbackSucceeded'|'CallbackFailed'|'CallbackTimedOut'|'InvocationCompleted'|null $EventType
 * @property string|null $SubType
 * @property int<1, max>|null $EventId
 * @property string|null $Id
 * @property string|null $Name
 * @property \Aws\Api\DateTimeResult|null $EventTimestamp
 * @property string|null $ParentId
 * @property ExecutionStartedDetails|null $ExecutionStartedDetails
 * @property ExecutionSucceededDetails|null $ExecutionSucceededDetails
 * @property ExecutionFailedDetails|null $ExecutionFailedDetails
 * @property ExecutionTimedOutDetails|null $ExecutionTimedOutDetails
 * @property ExecutionStoppedDetails|null $ExecutionStoppedDetails
 * @property ContextStartedDetails|null $ContextStartedDetails
 * @property ContextSucceededDetails|null $ContextSucceededDetails
 * @property ContextFailedDetails|null $ContextFailedDetails
 * @property WaitStartedDetails|null $WaitStartedDetails
 * @property WaitSucceededDetails|null $WaitSucceededDetails
 * @property WaitCancelledDetails|null $WaitCancelledDetails
 * @property StepStartedDetails|null $StepStartedDetails
 * @property StepSucceededDetails|null $StepSucceededDetails
 * @property StepFailedDetails|null $StepFailedDetails
 * @property ChainedInvokeStartedDetails|null $ChainedInvokeStartedDetails
 * @property ChainedInvokeSucceededDetails|null $ChainedInvokeSucceededDetails
 * @property ChainedInvokeFailedDetails|null $ChainedInvokeFailedDetails
 * @property ChainedInvokeTimedOutDetails|null $ChainedInvokeTimedOutDetails
 * @property ChainedInvokeStoppedDetails|null $ChainedInvokeStoppedDetails
 * @property CallbackStartedDetails|null $CallbackStartedDetails
 * @property CallbackSucceededDetails|null $CallbackSucceededDetails
 * @property CallbackFailedDetails|null $CallbackFailedDetails
 * @property CallbackTimedOutDetails|null $CallbackTimedOutDetails
 * @property InvocationCompletedDetails|null $InvocationCompletedDetails
 */
class Event extends Shape
{
    /**
     * @param array{
     *     EventType?: 'ExecutionStarted'|'ExecutionSucceeded'|'ExecutionFailed'|'ExecutionTimedOut'|'ExecutionStopped'|'ContextStarted'|'ContextSucceeded'|'ContextFailed'|'WaitStarted'|'WaitSucceeded'|'WaitCancelled'|'StepStarted'|'StepSucceeded'|'StepFailed'|'ChainedInvokeStarted'|'ChainedInvokeSucceeded'|'ChainedInvokeFailed'|'ChainedInvokeTimedOut'|'ChainedInvokeStopped'|'CallbackStarted'|'CallbackSucceeded'|'CallbackFailed'|'CallbackTimedOut'|'InvocationCompleted'|null,
     *     SubType?: string|null,
     *     EventId?: int<1, max>|null,
     *     Id?: string|null,
     *     Name?: string|null,
     *     EventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ParentId?: string|null,
     *     ExecutionStartedDetails?: ExecutionStartedDetails|null,
     *     ExecutionSucceededDetails?: ExecutionSucceededDetails|null,
     *     ExecutionFailedDetails?: ExecutionFailedDetails|null,
     *     ExecutionTimedOutDetails?: ExecutionTimedOutDetails|null,
     *     ExecutionStoppedDetails?: ExecutionStoppedDetails|null,
     *     ContextStartedDetails?: ContextStartedDetails|null,
     *     ContextSucceededDetails?: ContextSucceededDetails|null,
     *     ContextFailedDetails?: ContextFailedDetails|null,
     *     WaitStartedDetails?: WaitStartedDetails|null,
     *     WaitSucceededDetails?: WaitSucceededDetails|null,
     *     WaitCancelledDetails?: WaitCancelledDetails|null,
     *     StepStartedDetails?: StepStartedDetails|null,
     *     StepSucceededDetails?: StepSucceededDetails|null,
     *     StepFailedDetails?: StepFailedDetails|null,
     *     ChainedInvokeStartedDetails?: ChainedInvokeStartedDetails|null,
     *     ChainedInvokeSucceededDetails?: ChainedInvokeSucceededDetails|null,
     *     ChainedInvokeFailedDetails?: ChainedInvokeFailedDetails|null,
     *     ChainedInvokeTimedOutDetails?: ChainedInvokeTimedOutDetails|null,
     *     ChainedInvokeStoppedDetails?: ChainedInvokeStoppedDetails|null,
     *     CallbackStartedDetails?: CallbackStartedDetails|null,
     *     CallbackSucceededDetails?: CallbackSucceededDetails|null,
     *     CallbackFailedDetails?: CallbackFailedDetails|null,
     *     CallbackTimedOutDetails?: CallbackTimedOutDetails|null,
     *     InvocationCompletedDetails?: InvocationCompletedDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
