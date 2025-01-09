<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildsForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 */
class ListBuildsForProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
