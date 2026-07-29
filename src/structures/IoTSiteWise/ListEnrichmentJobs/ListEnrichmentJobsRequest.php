<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListEnrichmentJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceName
 * @property string|null $datasetId
 * @property string|null $propertyAlias
 * @property string|null $timeSeriesId
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED'|null $status
 * @property 'EVENT_DETECTION'|null $jobType
 * @property \Aws\Api\DateTimeResult|null $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property int<1, 250>|null $maxResults
 * @property string|null $nextToken
 */
class ListEnrichmentJobsRequest extends Request
{
    /**
     * @param array{
     *     workspaceName: string,
     *     datasetId?: string|null,
     *     propertyAlias?: string|null,
     *     timeSeriesId?: string|null,
     *     status?: 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED'|null,
     *     jobType?: 'EVENT_DETECTION'|null,
     *     startDate?: \Aws\Api\DateTimeResult|null,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 250>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
