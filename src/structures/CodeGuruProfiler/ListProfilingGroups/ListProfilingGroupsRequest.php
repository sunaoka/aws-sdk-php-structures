<?php

namespace Sunaoka\Aws\Structures\CodeGuruProfiler\ListProfilingGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeDescription
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 */
class ListProfilingGroupsRequest extends Request
{
    /**
     * @param array{
     *     includeDescription?: bool,
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
