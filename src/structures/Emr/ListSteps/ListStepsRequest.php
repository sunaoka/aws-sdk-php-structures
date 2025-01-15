<?php

namespace Sunaoka\Aws\Structures\Emr\ListSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property list<'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'>|null $StepStates
 * @property list<string>|null $StepIds
 * @property string|null $Marker
 */
class ListStepsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     StepStates?: list<'PENDING'|'CANCEL_PENDING'|'RUNNING'|'COMPLETED'|'CANCELLED'|'FAILED'|'INTERRUPTED'>|null,
     *     StepIds?: list<string>|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
