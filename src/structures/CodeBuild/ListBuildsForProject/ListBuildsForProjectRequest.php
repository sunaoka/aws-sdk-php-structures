<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildsForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListBuildsForProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
