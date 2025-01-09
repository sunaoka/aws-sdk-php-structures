<?php

namespace Sunaoka\Aws\Structures\SesV2\ListExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS' $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $JobStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult $CompletedTimestamp
 */
class ExportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     ExportSourceType?: 'METRICS_DATA'|'MESSAGE_INSIGHTS',
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
