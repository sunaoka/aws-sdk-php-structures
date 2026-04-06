<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $applicationId
 * @property string $indexId
 * @property string|null $nextToken
 * @property int<1, 10>|null $maxResults
 * @property \Aws\Api\DateTimeResult|null $startTime
 * @property \Aws\Api\DateTimeResult|null $endTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null $statusFilter
 */
class ListDataSourceSyncJobsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     applicationId: string,
     *     indexId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 10>|null,
     *     startTime?: \Aws\Api\DateTimeResult|null,
     *     endTime?: \Aws\Api\DateTimeResult|null,
     *     statusFilter?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
