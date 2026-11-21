<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'active'|'archived'|null $statusFilter
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     statusFilter?: 'active'|'archived'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
