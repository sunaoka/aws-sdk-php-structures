<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\DescribeAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M'|null $AnomalyDetectorFrequency
 */
class AnomalyDetectorConfigSummary extends Shape
{
    /**
     * @param array{AnomalyDetectorFrequency?: 'P1D'|'PT1H'|'PT10M'|'PT5M'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
