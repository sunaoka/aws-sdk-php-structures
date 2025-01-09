<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $JobId
 * @property ImportDestination $ImportDestination
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED' $JobStatus
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property int $ProcessedRecordsCount
 * @property int $FailedRecordsCount
 */
class ImportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string,
     *     ImportDestination?: ImportDestination,
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED',
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult,
     *     ProcessedRecordsCount?: int,
     *     FailedRecordsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
