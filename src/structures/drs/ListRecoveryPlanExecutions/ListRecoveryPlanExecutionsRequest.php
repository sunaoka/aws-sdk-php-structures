<?php

namespace Sunaoka\Aws\Structures\drs\ListRecoveryPlanExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $recoveryPlanArn
 * @property 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED'|null $status
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListRecoveryPlanExecutionsRequest extends Request
{
    /**
     * @param array{
     *     recoveryPlanArn?: string|null,
     *     status?: 'CREATED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|'CANCELLING'|'CANCELLED'|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
