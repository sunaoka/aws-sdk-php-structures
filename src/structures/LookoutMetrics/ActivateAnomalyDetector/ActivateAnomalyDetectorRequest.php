<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\ActivateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 */
class ActivateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{AnomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
