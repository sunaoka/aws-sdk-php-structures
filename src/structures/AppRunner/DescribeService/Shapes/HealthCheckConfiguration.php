<?php

namespace Sunaoka\Aws\Structures\AppRunner\DescribeService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'HTTP'|null $Protocol
 * @property string|null $Path
 * @property int<1, 20>|null $Interval
 * @property int<1, 20>|null $Timeout
 * @property int<1, 20>|null $HealthyThreshold
 * @property int<1, 20>|null $UnhealthyThreshold
 */
class HealthCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'TCP'|'HTTP'|null,
     *     Path?: string|null,
     *     Interval?: int<1, 20>|null,
     *     Timeout?: int<1, 20>|null,
     *     HealthyThreshold?: int<1, 20>|null,
     *     UnhealthyThreshold?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
