<?php

namespace Sunaoka\Aws\Structures\SesV2\ListImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $JobId
 * @property ImportDestination|null $ImportDestination
 * @property 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null $JobStatus
 * @property \Aws\Api\DateTimeResult|null $CreatedTimestamp
 * @property int|null $ProcessedRecordsCount
 * @property int|null $FailedRecordsCount
 */
class ImportJobSummary extends Shape
{
    /**
     * @param array{
     *     JobId?: string|null,
     *     ImportDestination?: ImportDestination|null,
     *     JobStatus?: 'CREATED'|'PROCESSING'|'COMPLETED'|'FAILED'|'CANCELLED'|null,
     *     CreatedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     ProcessedRecordsCount?: int|null,
     *     FailedRecordsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
