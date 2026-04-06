<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteLogAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $anomalyDetectorArn
 */
class DeleteLogAnomalyDetectorRequest extends Request
{
    /**
     * @param array{anomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
