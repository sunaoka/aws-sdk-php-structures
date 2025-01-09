<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchImportJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED' $status
 * @property string $failureReason
 * @property string $startTime
 * @property string $completionTime
 * @property string $inputPath
 * @property string $outputPath
 * @property string $eventTypeName
 * @property string $iamRoleArn
 * @property string $arn
 * @property int $processedRecordsCount
 * @property int $failedRecordsCount
 * @property int $totalRecordsCount
 */
class BatchImport extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     status?: 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED',
     *     failureReason?: string,
     *     startTime?: string,
     *     completionTime?: string,
     *     inputPath?: string,
     *     outputPath?: string,
     *     eventTypeName?: string,
     *     iamRoleArn?: string,
     *     arn?: string,
     *     processedRecordsCount?: int,
     *     failedRecordsCount?: int,
     *     totalRecordsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
