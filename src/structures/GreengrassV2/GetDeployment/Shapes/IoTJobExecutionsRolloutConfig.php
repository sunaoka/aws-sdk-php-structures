<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IoTJobExponentialRolloutRate $exponentialRate
 * @property int $maximumPerMinute
 */
class IoTJobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     exponentialRate?: IoTJobExponentialRolloutRate,
     *     maximumPerMinute?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
