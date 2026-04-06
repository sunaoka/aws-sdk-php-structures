<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupArnList
 * @property string|null $detectorName
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null $evaluationFrequency
 * @property string|null $filterPattern
 * @property string|null $kmsKeyId
 * @property int<7, 90>|null $anomalyVisibilityTime
 * @property array<string, string>|null $tags
 */
class CreateLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     logGroupArnList: list<string>,
     *     detectorName?: string|null,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null,
     *     filterPattern?: string|null,
     *     kmsKeyId?: string|null,
     *     anomalyVisibilityTime?: int<7, 90>|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
