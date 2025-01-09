<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\BackTestAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 */
class BackTestAnomalyDetectorRequest extends Request
{
    /**
     * @param array{AnomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
