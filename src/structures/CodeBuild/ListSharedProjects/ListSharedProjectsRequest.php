<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARN'|'MODIFIED_TIME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListSharedProjectsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: 'ARN'|'MODIFIED_TIME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
