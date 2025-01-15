<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $maximumPerMinute
 * @property ExponentialRolloutRate|null $exponentialRate
 */
class JobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     maximumPerMinute?: int<1, max>|null,
     *     exponentialRate?: ExponentialRolloutRate|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
