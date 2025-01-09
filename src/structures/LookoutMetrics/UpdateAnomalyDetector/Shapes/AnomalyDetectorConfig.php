<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\UpdateAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'P1D'|'PT1H'|'PT10M'|'PT5M' $AnomalyDetectorFrequency
 */
class AnomalyDetectorConfig extends Shape
{
    /**
     * @param array{AnomalyDetectorFrequency?: 'P1D'|'PT1H'|'PT10M'|'PT5M'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
