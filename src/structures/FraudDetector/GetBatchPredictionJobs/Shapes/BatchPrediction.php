<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetBatchPredictionJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jobId
 * @property 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED' $status
 * @property string $failureReason
 * @property string $startTime
 * @property string $completionTime
 * @property string $lastHeartbeatTime
 * @property string $inputPath
 * @property string $outputPath
 * @property string $eventTypeName
 * @property string $detectorName
 * @property string $detectorVersion
 * @property string $iamRoleArn
 * @property string $arn
 * @property int $processedRecordsCount
 * @property int $totalRecordsCount
 */
class BatchPrediction extends Shape
{
    /**
     * @param array{
     *     jobId?: string,
     *     status?: 'IN_PROGRESS_INITIALIZING'|'IN_PROGRESS'|'CANCEL_IN_PROGRESS'|'CANCELED'|'COMPLETE'|'FAILED',
     *     failureReason?: string,
     *     startTime?: string,
     *     completionTime?: string,
     *     lastHeartbeatTime?: string,
     *     inputPath?: string,
     *     outputPath?: string,
     *     eventTypeName?: string,
     *     detectorName?: string,
     *     detectorVersion?: string,
     *     iamRoleArn?: string,
     *     arn?: string,
     *     processedRecordsCount?: int,
     *     totalRecordsCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
