<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\CreateAssetModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TumblingWindow $tumbling
 */
class MetricWindow extends Shape
{
    /**
     * @param array{tumbling?: TumblingWindow} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
