<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListAssetModelProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TumblingWindow|null $tumbling
 */
class MetricWindow extends Shape
{
    /**
     * @param array{tumbling?: TumblingWindow|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
