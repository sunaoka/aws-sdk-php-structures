<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MeasurementProcessingConfig $processingConfig
 */
class Measurement extends Shape
{
    /**
     * @param array{processingConfig?: MeasurementProcessingConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
