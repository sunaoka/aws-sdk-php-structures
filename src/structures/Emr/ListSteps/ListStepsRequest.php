<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property list<'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'> $StepStates
 * @property list<string> $StepIds
 * @property string $Marker
 */
class ListStepsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepStates?: list<'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'>,
     *     StepIds?: list<string>,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
