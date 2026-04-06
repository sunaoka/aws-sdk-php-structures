<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AnomalyDetectorArn
 */
class DescribeAnomalyDetectorRequest extends Request
{
    /**
     * @param array{AnomalyDetectorArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
