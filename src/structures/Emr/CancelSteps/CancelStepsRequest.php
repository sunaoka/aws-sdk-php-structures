<?php

namespace Sunaoka\Aws\Structures\Emr\CancelSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property list<string> $StepIds
 * @property 'SEND_INTERRUPT'|'TERMINATE_PROCESS' $StepCancellationOption
 */
class CancelStepsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepIds: list<string>,
     *     StepCancellationOption?: 'SEND_INTERRUPT'|'TERMINATE_PROCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
