<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\GetDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IoTJobExponentialRolloutRate|null $exponentialRate
 * @property int<1, 1000>|null $maximumPerMinute
 */
class IoTJobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     exponentialRate?: IoTJobExponentialRolloutRate|null,
     *     maximumPerMinute?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
