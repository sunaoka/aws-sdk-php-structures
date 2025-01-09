<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARN'|'MODIFIED_TIME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property int $maxResults
 * @property string $nextToken
 */
class ListSharedProjectsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: 'ARN'|'MODIFIED_TIME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
