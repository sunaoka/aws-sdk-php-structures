<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME' $sortBy
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME',
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
