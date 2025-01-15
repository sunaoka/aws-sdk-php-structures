<?php

namespace Sunaoka\Aws\Structures\EMRServerless\ListApplications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 * @property list<'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED'>|null $states
 */
class ListApplicationsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null,
     *     states?: list<'CREATING'|'CREATED'|'STARTING'|'STARTED'|'STOPPING'|'STOPPED'|'TERMINATED'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
