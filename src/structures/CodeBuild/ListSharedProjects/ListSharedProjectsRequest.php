<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSharedProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'ARN'|'MODIFIED_TIME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListSharedProjectsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: 'ARN'|'MODIFIED_TIME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
