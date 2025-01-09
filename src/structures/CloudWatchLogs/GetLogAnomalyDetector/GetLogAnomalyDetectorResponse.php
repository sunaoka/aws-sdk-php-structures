<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogAnomalyDetector;

use Sunaoka\Aws\Structures\Response;

/**
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
class GetLogAnomalyDetectorResponse extends Response
{
}
