<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeSpotFleetRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZone
 * @property string|null $GroupName
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 * @property string|null $AvailabilityZoneId
 */
class SpotPlacement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZone?: string|null,
     *     GroupName?: string|null,
     *     Tenancy?: 'default'|'dedicated'|'host'|null,
     *     AvailabilityZoneId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
