<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ExportReadSetFilter $filter
 */
class ListReadSetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ExportReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
