<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'SUBMITTED'|'RUNNING'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED' $status
 * @property \Aws\Api\DateTimeResult $startedAt
 * @property \Aws\Api\DateTimeResult|null $completedAt
 * @property string $destinationS3Uri
 */
class ExportJobSummary extends Shape
{
    /**
     * @param array{
     *     jobId: string,
     *     status: 'SUBMITTED'|'RUNNING'|'COMPLETED'|'COMPLETED_WITH_ERRORS'|'FAILED',
     *     startedAt: \Aws\Api\DateTimeResult,
     *     completedAt?: \Aws\Api\DateTimeResult|null,
     *     destinationS3Uri: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
