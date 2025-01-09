<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatchesForProject;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 * @property Shapes\BuildBatchFilter $filter
 * @property int<1, 100> $maxResults
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 */
class ListBuildBatchesForProjectRequest extends Request
{
    /**
     * @param array{
     *     projectName?: string,
     *     filter?: Shapes\BuildBatchFilter,
     *     maxResults?: int<1, 100>,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
