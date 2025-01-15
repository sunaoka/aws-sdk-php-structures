<?php

namespace Sunaoka\Aws\Structures\InternetMonitor\CreateMonitor\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3Config|null $S3Config
 */
class InternetMeasurementsLogDelivery extends Shape
{
    /**
     * @param array{S3Config?: S3Config|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
