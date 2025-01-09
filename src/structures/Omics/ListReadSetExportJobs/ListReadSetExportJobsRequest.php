<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ExportReadSetFilter $filter
 */
class ListReadSetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ExportReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
