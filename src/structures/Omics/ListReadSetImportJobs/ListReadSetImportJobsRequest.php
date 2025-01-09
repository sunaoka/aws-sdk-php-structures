<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property string $sequenceStoreId
 * @property Shapes\ImportReadSetFilter $filter
 */
class ListReadSetImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     sequenceStoreId: string,
     *     filter?: Shapes\ImportReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
