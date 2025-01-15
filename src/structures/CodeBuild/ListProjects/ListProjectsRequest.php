<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null $sortBy
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     sortBy?: 'NAME'|'CREATED_TIME'|'LAST_MODIFIED_TIME'|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
