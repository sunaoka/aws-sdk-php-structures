<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MaxPrice
 * @property 'one-time'|'persistent'|null $SpotInstanceType
 * @property int|null $BlockDurationMinutes
 * @property \Aws\Api\DateTimeResult|null $ValidUntil
 * @property 'hibernate'|'stop'|'terminate'|null $InstanceInterruptionBehavior
 */
class LaunchTemplateSpotMarketOptions extends Shape
{
    /**
     * @param array{
     *     MaxPrice?: string|null,
     *     SpotInstanceType?: 'one-time'|'persistent'|null,
     *     BlockDurationMinutes?: int|null,
     *     ValidUntil?: \Aws\Api\DateTimeResult|null,
     *     InstanceInterruptionBehavior?: 'hibernate'|'stop'|'terminate'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
