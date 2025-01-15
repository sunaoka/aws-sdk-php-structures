<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchPredictionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $jobId
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED'|null $status
 * @property string|null $failureReason
 * @property string|null $startTime
 * @property string|null $completionTime
 * @property string|null $lastHeartbeatTime
 * @property string|null $inputPath
 * @property string|null $outputPath
 * @property string|null $eventTypeName
 * @property string|null $detectorName
 * @property string|null $detectorVersion
 * @property string|null $iamRoleArn
 * @property string|null $arn
 * @property int|null $processedRecordsCount
 * @property int|null $totalRecordsCount
 */
class BatchPrediction extends Shape
{
    /**
     * @param array{
     *     jobId?: string|null,
     *     status?: 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED'|null,
     *     failureReason?: string|null,
     *     startTime?: string|null,
     *     completionTime?: string|null,
     *     lastHeartbeatTime?: string|null,
     *     inputPath?: string|null,
     *     outputPath?: string|null,
     *     eventTypeName?: string|null,
     *     detectorName?: string|null,
     *     detectorVersion?: string|null,
     *     iamRoleArn?: string|null,
     *     arn?: string|null,
     *     processedRecordsCount?: int|null,
     *     totalRecordsCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
