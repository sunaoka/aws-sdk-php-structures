<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED'|null $status
 * @property string|null $failureReason
 * @property string|null $startTime
 * @property string|null $completionTime
 * @property string|null $inputPath
 * @property string|null $outputPath
 * @property string|null $eventTypeName
 * @property string|null $iamRoleArn
 * @property string|null $arn
 * @property int|null $processedRecordsCount
 * @property int|null $failedRecordsCount
 * @property int|null $totalRecordsCount
 */
class BatchImport extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     status?: 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED'|null,
     *     failureReason?: string|null,
     *     startTime?: string|null,
     *     completionTime?: string|null,
     *     inputPath?: string|null,
     *     outputPath?: string|null,
     *     eventTypeName?: string|null,
     *     iamRoleArn?: string|null,
     *     arn?: string|null,
     *     processedRecordsCount?: int|null,
     *     failedRecordsCount?: int|null,
     *     totalRecordsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
