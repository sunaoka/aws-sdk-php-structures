<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $name
 * @property string $runGroupId
 * @property string $startingToken
 * @property int $maxResults
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED' $status
 */
class ListRunsRequest extends Request
{
    /**
     * @param array{
     *     name?: string,
     *     runGroupId?: string,
     *     startingToken?: string,
     *     maxResults?: int,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
