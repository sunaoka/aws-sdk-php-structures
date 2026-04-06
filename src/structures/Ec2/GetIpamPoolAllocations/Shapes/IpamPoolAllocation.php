<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamPoolAllocations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Cidr
 * @property string|null $IpamPoolAllocationId
 * @property string|null $Description
 * @property string|null $ResourceId
 * @property 'ipam-pool'|'vpc'|'ec2-public-ipv4-pool'|'custom'|'subnet'|'eip'|'anycast-ip-list'|null $ResourceType
 * @property string|null $ResourceRegion
 * @property string|null $ResourceOwner
 */
class IpamPoolAllocation extends Shape
{
    /**
     * @param array{
     *     Cidr?: string|null,
     *     IpamPoolAllocationId?: string|null,
     *     Description?: string|null,
     *     ResourceId?: string|null,
     *     ResourceType?: 'ipam-pool'|'vpc'|'ec2-public-ipv4-pool'|'custom'|'subnet'|'eip'|'anycast-ip-list'|null,
     *     ResourceRegion?: string|null,
     *     ResourceOwner?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
