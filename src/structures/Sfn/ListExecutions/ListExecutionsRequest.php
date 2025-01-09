<?php

namespace Sunaoka\Aws\Structures\Sfn\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $stateMachineArn
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE' $statusFilter
 * @property int<0, 1000> $maxResults
 * @property string $nextToken
 * @property string $mapRunArn
 * @property 'REDRIVEN'|'NOT_REDRIVEN' $redriveFilter
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn?: string,
     *     statusFilter?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|'PENDING_REDRIVE',
     *     maxResults?: int<0, 1000>,
     *     nextToken?: string,
     *     mapRunArn?: string,
     *     redriveFilter?: 'REDRIVEN'|'NOT_REDRIVEN'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
