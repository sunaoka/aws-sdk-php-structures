<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\CreateLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $logGroupArnList
 * @property string $detectorName
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR' $evaluationFrequency
 * @property string $filterPattern
 * @property string $kmsKeyId
 * @property int $anomalyVisibilityTime
 * @property array<string, string> $tags
 */
class CreateLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     logGroupArnList: list<string>,
     *     detectorName?: string,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR',
     *     filterPattern?: string,
     *     kmsKeyId?: string,
     *     anomalyVisibilityTime?: int,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
