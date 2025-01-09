<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'HTTP' $Protocol
 * @property string $Path
 * @property int<1, 20> $Interval
 * @property int<1, 20> $Timeout
 * @property int<1, 20> $HealthyThreshold
 * @property int<1, 20> $UnhealthyThreshold
 */
class HealthCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'TCP'|'HTTP',
     *     Path?: string,
     *     Interval?: int<1, 20>,
     *     Timeout?: int<1, 20>,
     *     HealthyThreshold?: int<1, 20>,
     *     UnhealthyThreshold?: int<1, 20>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
