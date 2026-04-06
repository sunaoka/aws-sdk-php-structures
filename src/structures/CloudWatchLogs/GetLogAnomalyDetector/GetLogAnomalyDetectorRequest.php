<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyDetectorArn
 */
class GetLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{anomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
