<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListDataSourceSyncJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $dataSourceId
 * @property string $applicationId
 * @property string $indexId
 * @property string $nextToken
 * @property int<1, 10> $maxResults
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING' $statusFilter
 */
class ListDataSourceSyncJobsRequest extends Request
{
    /**
     * @param array{
     *     dataSourceId: string,
     *     applicationId: string,
     *     indexId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 10>,
     *     startTime?: \Aws\Api\DateTimeResult,
     *     endTime?: \Aws\Api\DateTimeResult,
     *     statusFilter?: 'FAILED'|'SUCCEEDED'|'SYNCING'|'INCOMPLETE'|'STOPPING'|'ABORTED'|'SYNCING_INDEXING'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
