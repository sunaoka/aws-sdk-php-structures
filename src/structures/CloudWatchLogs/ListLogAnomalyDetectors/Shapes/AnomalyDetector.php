<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $anomalyDetectorArn
 * @property string $detectorName
 * @property list<string> $logGroupArnList
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR' $evaluationFrequency
 * @property string $filterPattern
 * @property 'INITIALIZING'|'TRAINING'|'ANALYZING'|'FAILED'|'DELETED'|'PAUSED' $anomalyDetectorStatus
 * @property string $kmsKeyId
 * @property int $creationTimeStamp
 * @property int $lastModifiedTimeStamp
 * @property int $anomalyVisibilityTime
 */
class AnomalyDetector extends Shape
{
    /**
     * @param array{
     *     anomalyDetectorArn?: string,
     *     detectorName?: string,
     *     logGroupArnList?: list<string>,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR',
     *     filterPattern?: string,
     *     anomalyDetectorStatus?: 'INITIALIZING'|'TRAINING'|'ANALYZING'|'FAILED'|'DELETED'|'PAUSED',
     *     kmsKeyId?: string,
     *     creationTimeStamp?: int,
     *     lastModifiedTimeStamp?: int,
     *     anomalyVisibilityTime?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
