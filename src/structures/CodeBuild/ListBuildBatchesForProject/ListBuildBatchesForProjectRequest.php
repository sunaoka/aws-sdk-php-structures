<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatchesForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $projectName
 * @property Shapes\BuildBatchFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListBuildBatchesForProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName?: string|null,
     *     filter?: Shapes\BuildBatchFilter|null,
     *     maxResults?: int<1, 100>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
