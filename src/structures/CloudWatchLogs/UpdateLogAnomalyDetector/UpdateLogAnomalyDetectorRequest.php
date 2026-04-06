<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\UpdateLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyDetectorArn
 * @property 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null $evaluationFrequency
 * @property string|null $filterPattern
 * @property int<7, 90>|null $anomalyVisibilityTime
 * @property bool $enabled
 */
class UpdateLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{
     *     anomalyDetectorArn: string,
     *     evaluationFrequency?: 'ONE_MIN'|'FIVE_MIN'|'TEN_MIN'|'FIFTEEN_MIN'|'THIRTY_MIN'|'ONE_HOUR'|null,
     *     filterPattern?: string|null,
     *     anomalyVisibilityTime?: int<7, 90>|null,
     *     enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
