<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogAnomalyDetector;

use Sunaoka\Aws\Structures\Response;

/**
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
class GetLogAnomalyDetectorResponse extends Response
{
}
