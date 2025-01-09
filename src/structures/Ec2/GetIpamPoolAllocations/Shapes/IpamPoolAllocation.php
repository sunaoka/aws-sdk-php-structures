<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Cidr
 * @property string $IpamPoolAllocationId
 * @property string $Description
 * @property string $ResourceId
 * @property 'ipam-pool'|'vpc'|'ec2-public-ipv4-pool'|'custom'|'subnet'|'eip' $ResourceType
 * @property string $ResourceRegion
 * @property string $ResourceOwner
 */
class IpamPoolAllocation extends Shape
{
    /**
     * @param array{
     *     Cidr?: string,
     *     IpamPoolAllocationId?: string,
     *     Description?: string,
     *     ResourceId?: string,
     *     ResourceType?: 'ipam-pool'|'vpc'|'ec2-public-ipv4-pool'|'custom'|'subnet'|'eip',
     *     ResourceRegion?: string,
     *     ResourceOwner?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
