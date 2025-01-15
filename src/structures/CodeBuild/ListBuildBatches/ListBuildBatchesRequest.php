<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\BuildBatchFilter|null $filter
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property string|null $nextToken
 */
class ListBuildBatchesRequest extends Request
{
    /**
     * @param array{
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
