<?php

namespace Sunaoka\Aws\Structures\Omics\ListRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $name
 * @property string|null $runGroupId
 * @property string|null $startingToken
 * @property int<1, 100>|null $maxResults
 * @property 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null $status
 */
class ListRunsRequest extends Request
{
    /**
     * @param array{
     *     name?: string|null,
     *     runGroupId?: string|null,
     *     startingToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     status?: 'PENDING'|'STARTING'|'RUNNING'|'STOPPING'|'COMPLETED'|'DELETED'|'CANCELLED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
