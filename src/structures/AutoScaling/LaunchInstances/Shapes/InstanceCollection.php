<?php

namespace Sunaoka\Aws\Structures\AutoScaling\LaunchInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property string|null $MarketType
 * @property string|null $SubnetId
 * @property string|null $AvailabilityZone
 * @property string|null $AvailabilityZoneId
 * @property list<string>|null $InstanceIds
 */
class InstanceCollection extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     MarketType?: string|null,
     *     SubnetId?: string|null,
     *     AvailabilityZone?: string|null,
     *     AvailabilityZoneId?: string|null,
     *     InstanceIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
