<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BuildBatchFilter $filter
 * @property int $maxResults
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property string $nextToken
 */
class ListBuildBatchesRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\BuildBatchFilter,
     *     maxResults?: int,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
