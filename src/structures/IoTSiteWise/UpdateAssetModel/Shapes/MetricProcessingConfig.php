<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\UpdateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'EDGE'|'CLOUD' $computeLocation
 */
class MetricProcessingConfig extends Shape
{
    /**
     * @param array{computeLocation: 'EDGE'|'CLOUD'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
