<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribeAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MeasurementProcessingConfig|null $processingConfig
 */
class Measurement extends Shape
{
    /**
     * @param array{processingConfig?: MeasurementProcessingConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
