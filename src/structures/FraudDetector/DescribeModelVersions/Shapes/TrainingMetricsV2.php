<?php

namespace Sunaoka\Aws\Structures\FraudDetector\DescribeModelVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OFITrainingMetricsValue|null $ofi
 * @property TFITrainingMetricsValue|null $tfi
 * @property ATITrainingMetricsValue|null $ati
 */
class TrainingMetricsV2 extends Shape
{
    /**
     * @param array{
     *     ofi?: OFITrainingMetricsValue|null,
     *     tfi?: TFITrainingMetricsValue|null,
     *     ati?: ATITrainingMetricsValue|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
