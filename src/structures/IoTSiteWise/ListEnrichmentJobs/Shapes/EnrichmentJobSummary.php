<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListEnrichmentJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED' $status
 * @property string $workspaceName
 * @property 'EVENT_DETECTION' $jobType
 * @property string $datasetId
 * @property string|null $propertyAlias
 * @property string|null $timeSeriesId
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class EnrichmentJobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'PENDING'|'RUNNING'|'COMPLETED'|'FAILED'|'TIMED_OUT'|'CANCELLED',
     *     workspaceName: string,
     *     jobType: 'EVENT_DETECTION',
     *     datasetId: string,
     *     propertyAlias?: string|null,
     *     timeSeriesId?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
