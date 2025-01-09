<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OFITrainingMetricsValue $ofi
 * @property TFITrainingMetricsValue $tfi
 * @property ATITrainingMetricsValue $ati
 */
class TrainingMetricsV2 extends Shape
{
    /**
     * @param array{
     *     ofi?: OFITrainingMetricsValue,
     *     tfi?: TFITrainingMetricsValue,
     *     ati?: ATITrainingMetricsValue
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
