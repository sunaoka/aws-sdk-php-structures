<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListLaunches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $project
 * @property 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED'|null $status
 */
class ListLaunchesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     project: string,
     *     status?: 'CREATED'|'UPDATING'|'RUNNING'|'COMPLETED'|'CANCELLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
