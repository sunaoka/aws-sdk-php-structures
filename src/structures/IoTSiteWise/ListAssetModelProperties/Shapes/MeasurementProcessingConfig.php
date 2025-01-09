<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ForwardingConfig $forwardingConfig
 */
class MeasurementProcessingConfig extends Shape
{
    /**
     * @param array{forwardingConfig: ForwardingConfig} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
