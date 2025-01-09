<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $project
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED' $status
 */
class ListLaunchesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     project: string,
     *     status?: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
