<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $runGroupId
 * @property string $startingToken
 * @property int<1, 100> $maxResults
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED' $status
 */
class ListRunsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     runGroupId?: string,
     *     startingToken?: string,
     *     maxResults?: int<1, 100>,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
