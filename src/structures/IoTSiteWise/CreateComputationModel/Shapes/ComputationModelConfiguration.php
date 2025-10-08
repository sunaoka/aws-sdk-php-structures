<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateComputationModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ComputationModelAnomalyDetectionConfiguration|null $anomalyDetection
 */
class ComputationModelConfiguration extends Shape
{
    /**
     * @param array{anomalyDetection?: ComputationModelAnomalyDetectionConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
