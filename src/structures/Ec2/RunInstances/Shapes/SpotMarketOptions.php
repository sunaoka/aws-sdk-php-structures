<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MaxPrice
 * @property 'one-time'|'persistent' $SpotInstanceType
 * @property int $BlockDurationMinutes
 * @property \Aws\Api\DateTimeResult $ValidUntil
 * @property 'hibernate'|'stop'|'terminate' $InstanceInterruptionBehavior
 */
class SpotMarketOptions extends Shape
{
    /**
     * @param array{
     *     MaxPrice?: string,
     *     SpotInstanceType?: 'one-time'|'persistent',
     *     BlockDurationMinutes?: int,
     *     ValidUntil?: \Aws\Api\DateTimeResult,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
