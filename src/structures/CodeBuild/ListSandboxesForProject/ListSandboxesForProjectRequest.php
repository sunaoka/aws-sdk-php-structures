<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListSandboxesForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListSandboxesForProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName: string,
     *     maxResults?: int<1, 100>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
