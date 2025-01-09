<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListBulkImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 * @property 'ALL'|'PENDING'|'RUNNING'|'CANCELLED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'COMPLETED' $filter
 */
class ListBulkImportJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 250>,
     *     filter?: 'ALL'|'PENDING'|'RUNNING'|'CANCELLED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'COMPLETED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
