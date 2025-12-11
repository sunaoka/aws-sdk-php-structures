<?php

namespace Sunaoka\Aws\Structures\Lambda\CheckpointDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string|null $ParentId
 * @property string|null $Name
 * @property 'EXECUTION'|'CONTEXT'|'STEP'|'WAIT'|'CALLBACK'|'CHAINED_INVOKE' $Type
 * @property string|null $SubType
 * @property 'START'|'SUCCEED'|'FAIL'|'RETRY'|'CANCEL' $Action
 * @property string|null $Payload
 * @property ErrorObject|null $Error
 * @property ContextOptions|null $ContextOptions
 * @property StepOptions|null $StepOptions
 * @property WaitOptions|null $WaitOptions
 * @property CallbackOptions|null $CallbackOptions
 * @property ChainedInvokeOptions|null $ChainedInvokeOptions
 */
class OperationUpdate extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ParentId?: string|null,
     *     Name?: string|null,
     *     Type: 'EXECUTION'|'CONTEXT'|'STEP'|'WAIT'|'CALLBACK'|'CHAINED_INVOKE',
     *     SubType?: string|null,
     *     Action: 'START'|'SUCCEED'|'FAIL'|'RETRY'|'CANCEL',
     *     Payload?: string|null,
     *     Error?: ErrorObject|null,
     *     ContextOptions?: ContextOptions|null,
     *     StepOptions?: StepOptions|null,
     *     WaitOptions?: WaitOptions|null,
     *     CallbackOptions?: CallbackOptions|null,
     *     ChainedInvokeOptions?: ChainedInvokeOptions|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
