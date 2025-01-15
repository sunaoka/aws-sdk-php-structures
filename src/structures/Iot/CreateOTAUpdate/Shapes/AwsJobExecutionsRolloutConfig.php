<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 1000>|null $maximumPerMinute
 * @property AwsJobExponentialRolloutRate|null $exponentialRate
 */
class AwsJobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     maximumPerMinute?: int<1, 1000>|null,
     *     exponentialRate?: AwsJobExponentialRolloutRate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
