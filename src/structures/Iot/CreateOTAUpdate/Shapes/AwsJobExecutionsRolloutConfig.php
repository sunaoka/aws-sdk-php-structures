<?php

namespace Sunaoka\Aws\Structures\Iot\CreateOTAUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $maximumPerMinute
 * @property AwsJobExponentialRolloutRate $exponentialRate
 */
class AwsJobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     maximumPerMinute?: int,
     *     exponentialRate?: AwsJobExponentialRolloutRate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
