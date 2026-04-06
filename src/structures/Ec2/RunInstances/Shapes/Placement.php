<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AvailabilityZoneId
 * @property string|null $Affinity
 * @property string|null $GroupName
 * @property int|null $PartitionNumber
 * @property string|null $HostId
 * @property 'default'|'dedicated'|'host'|null $Tenancy
 * @property string|null $SpreadDomain
 * @property string|null $HostResourceGroupArn
 * @property string|null $GroupId
 * @property string|null $AvailabilityZone
 */
class Placement extends Shape
{
    /**
     * @param array{
     *     AvailabilityZoneId?: string|null,
     *     Affinity?: string|null,
     *     GroupName?: string|null,
     *     PartitionNumber?: int|null,
     *     HostId?: string|null,
     *     Tenancy?: 'default'|'dedicated'|'host'|null,
     *     SpreadDomain?: string|null,
     *     HostResourceGroupArn?: string|null,
     *     GroupId?: string|null,
     *     AvailabilityZone?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
