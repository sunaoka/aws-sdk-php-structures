<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DeactivateAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 */
class DeactivateAnomalyDetectorRequest extends Request
{
    /**
     * @param array{AnomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
