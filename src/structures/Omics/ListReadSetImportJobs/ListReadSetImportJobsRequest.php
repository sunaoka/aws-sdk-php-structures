<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $sequenceStoreId
 * @property Shapes\ImportReadSetFilter|null $filter
 */
class ListReadSetImportJobsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     sequenceStoreId: string,
     *     filter?: Shapes\ImportReadSetFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
