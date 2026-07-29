<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListBulkImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 * @property 'ALL'|'PENDING'|'RUNNING'|'CANCELLED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'COMPLETED'|null $filter
 * @property string|null $workspaceName
 */
class ListBulkImportJobsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null,
     *     filter?: 'ALL'|'PENDING'|'RUNNING'|'CANCELLED'|'FAILED'|'COMPLETED_WITH_FAILURES'|'COMPLETED'|null,
     *     workspaceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
