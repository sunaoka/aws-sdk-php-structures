<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyDetectorArn
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR' $evaluationFrequency
 * @property string $filterPattern
 * @property int $anomalyVisibilityTime
 * @property bool $enabled
 */
class UpdateLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     anomalyDetectorArn: string,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR',
     *     filterPattern?: string,
     *     anomalyVisibilityTime?: int,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
