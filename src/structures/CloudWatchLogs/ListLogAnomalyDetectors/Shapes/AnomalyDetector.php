<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\ListLogAnomalyDetectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $anomalyDetectorArn
 * @property string|null $detectorName
 * @property list<string>|null $logGroupArnList
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null $evaluationFrequency
 * @property string|null $filterPattern
 * @property 'INITIALIZING'|'TRAINING'|'ANALYZING'|'FAILED'|'DELETED'|'PAUSED'|null $anomalyDetectorStatus
 * @property string|null $kmsKeyId
 * @property int<0, max>|null $creationTimeStamp
 * @property int<0, max>|null $lastModifiedTimeStamp
 * @property int<7, 90>|null $anomalyVisibilityTime
 */
class AnomalyDetector extends Shape
{
    /**
     * @param array{
     *     anomalyDetectorArn?: string|null,
     *     detectorName?: string|null,
     *     logGroupArnList?: list<string>|null,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null,
     *     filterPattern?: string|null,
     *     anomalyDetectorStatus?: 'INITIALIZING'|'TRAINING'|'ANALYZING'|'FAILED'|'DELETED'|'PAUSED'|null,
     *     kmsKeyId?: string|null,
     *     creationTimeStamp?: int<0, max>|null,
     *     lastModifiedTimeStamp?: int<0, max>|null,
     *     anomalyVisibilityTime?: int<7, 90>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
