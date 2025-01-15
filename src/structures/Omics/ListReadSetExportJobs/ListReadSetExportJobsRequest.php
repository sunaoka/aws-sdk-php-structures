<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ExportReadSetFilter|null $filter
 */
class ListReadSetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ExportReadSetFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
