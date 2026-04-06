<?php

namespace Sunaoka\Aws\Structures\Sfn\ListExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $stateMachineArn
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|null $statusFilter
 * @property int<0, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string|null $mapRunArn
 */
class ListExecutionsRequest extends Request
{
    /**
     * @param array{
     *     stateMachineArn?: string|null,
     *     statusFilter?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'TIMED_OUT'|'ABORTED'|null,
     *     maxResults?: int<0, 1000>|null,
     *     nextToken?: string|null,
     *     mapRunArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
