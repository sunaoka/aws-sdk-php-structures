<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 * @property list<'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED'> $states
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 50>,
     *     states?: list<'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
