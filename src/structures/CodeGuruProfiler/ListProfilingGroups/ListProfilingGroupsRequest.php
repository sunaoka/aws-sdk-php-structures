<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeDescription
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 */
class ListProfilingGroupsRequest extends Request
{
    /**
     * @param array{
     *     includeDescription?: bool|null,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
