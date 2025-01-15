<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvidently\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 50>|null $maxResults
 * @property string|null $nextToken
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 50>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
