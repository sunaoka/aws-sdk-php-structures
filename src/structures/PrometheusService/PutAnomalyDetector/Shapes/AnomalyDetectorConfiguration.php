<?php

namespace Sunaoka\Aws\Structures\PrometheusService\PutAnomalyDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property RandomCutForestConfiguration|null $randomCutForest
 */
class AnomalyDetectorConfiguration extends Shape
{
    /**
     * @param array{randomCutForest?: RandomCutForestConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
