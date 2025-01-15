<?php

namespace Sunaoka\Aws\Structures\SesV2\ListExportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property 'METRICS_DATA'|'MESSAGE_INSIGHTS'|null $ExportSourceType
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property \Aws\Api\DateTimeResult|null $CompletedTimestamp
 */
class ExportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     ExportSourceType?: 'METRICS_DATA'|'MESSAGE_INSIGHTS'|null,
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     CompletedTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
