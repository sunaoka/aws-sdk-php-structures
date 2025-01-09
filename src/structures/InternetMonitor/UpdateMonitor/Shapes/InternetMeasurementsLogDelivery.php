<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\UpdateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config $S3Config
 */
class InternetMeasurementsLogDelivery extends Shape
{
    /**
     * @param array{S3Config?: S3Config} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
