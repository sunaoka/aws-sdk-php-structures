<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecutionState\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $ParentId
 * @property string|null $Name
 * @property 'EXECUTION'|'CONTEXT'|'STEP'|'WAIT'|'CALLBACK'|'CHAINED_INVOKE' $Type
 * @property string|null $SubType
 * @property \Aws\Api\DateTimeResult $StartTimestamp
 * @property \Aws\Api\DateTimeResult|null $EndTimestamp
 * @property 'STARTED'|'PENDING'|'READY'|'SUCCEEDED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|'STOPPED' $Status
 * @property ExecutionDetails|null $ExecutionDetails
 * @property ContextDetails|null $ContextDetails
 * @property StepDetails|null $StepDetails
 * @property WaitDetails|null $WaitDetails
 * @property CallbackDetails|null $CallbackDetails
 * @property ChainedInvokeDetails|null $ChainedInvokeDetails
 */
class Operation extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParentId?: string|null,
     *     Name?: string|null,
     *     Type: 'EXECUTION'|'CONTEXT'|'STEP'|'WAIT'|'CALLBACK'|'CHAINED_INVOKE',
     *     SubType?: string|null,
     *     StartTimestamp: \Aws\Api\DateTimeResult,
     *     EndTimestamp?: \Aws\Api\DateTimeResult|null,
     *     Status: 'STARTED'|'PENDING'|'READY'|'SUCCEEDED'|'FAILED'|'CANCELLED'|'TIMED_OUT'|'STOPPED',
     *     ExecutionDetails?: ExecutionDetails|null,
     *     ContextDetails?: ContextDetails|null,
     *     StepDetails?: StepDetails|null,
     *     WaitDetails?: WaitDetails|null,
     *     CallbackDetails?: CallbackDetails|null,
     *     ChainedInvokeDetails?: ChainedInvokeDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
