<?php

namespace Sunaoka\Aws\Structures\AppRunner\UpdateService\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TCP'|'HTTP' $Protocol
 * @property string $Path
 * @property int $Interval
 * @property int $Timeout
 * @property int $HealthyThreshold
 * @property int $UnhealthyThreshold
 */
class HealthCheckConfiguration extends Shape
{
    /**
     * @param array{
     *     Protocol?: 'TCP'|'HTTP',
     *     Path?: string,
     *     Interval?: int,
     *     Timeout?: int,
     *     HealthyThreshold?: int,
     *     UnhealthyThreshold?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
