<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $maximumPerMinute
 * @property ExponentialRolloutRate $exponentialRate
 */
class JobExecutionsRolloutConfig extends Shape
{
    /**
     * @param array{
     *     maximumPerMinute?: int<1, max>,
     *     exponentialRate?: ExponentialRolloutRate
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
