<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IpId
 * @property string|null $SubnetId
 * @property string|null $Ip
 * @property string|null $Ipv6
 * @property 'CREATING'|'FAILED_CREATION'|'ATTACHING'|'ATTACHED'|'REMAP_DETACHING'|'REMAP_ATTACHING'|'DETACHING'|'FAILED_RESOURCE_GONE'|'DELETING'|'DELETE_FAILED_FAS_EXPIRED'|'UPDATING'|'UPDATE_FAILED'|null $Status
 * @property string|null $StatusMessage
 * @property string|null $CreationTime
 * @property string|null $ModificationTime
 */
class IpAddressResponse extends Shape
{
    /**
     * @param array{
     *     IpId?: string|null,
     *     SubnetId?: string|null,
     *     Ip?: string|null,
     *     Ipv6?: string|null,
     *     Status?: 'CREATING'|'FAILED_CREATION'|'ATTACHING'|'ATTACHED'|'REMAP_DETACHING'|'REMAP_ATTACHING'|'DETACHING'|'FAILED_RESOURCE_GONE'|'DELETING'|'DELETE_FAILED_FAS_EXPIRED'|'UPDATING'|'UPDATE_FAILED'|null,
     *     StatusMessage?: string|null,
     *     CreationTime?: string|null,
     *     ModificationTime?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
