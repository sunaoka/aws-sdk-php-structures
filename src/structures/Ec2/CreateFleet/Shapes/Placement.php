<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Affinity
 * @property string $GroupName
 * @property int $PartitionNumber
 * @property string $HostId
 * @property 'default'|'dedicated'|'host' $Tenancy
 * @property string $SpreadDomain
 * @property string $HostResourceGroupArn
 * @property string $GroupId
 * @property string $AvailabilityZone
 */
class Placement extends Shape
{
    /**
     * @param array{
     *     Affinity?: string,
     *     GroupName?: string,
     *     PartitionNumber?: int,
     *     HostId?: string,
     *     Tenancy?: 'default'|'dedicated'|'host',
     *     SpreadDomain?: string,
     *     HostResourceGroupArn?: string,
     *     GroupId?: string,
     *     AvailabilityZone?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
