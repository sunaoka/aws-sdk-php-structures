<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeDescription
 * @property int $maxResults
 * @property string $nextToken
 */
class ListProfilingGroupsRequest extends Request
{
    /**
     * @param array{
     *     includeDescription?: bool,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
