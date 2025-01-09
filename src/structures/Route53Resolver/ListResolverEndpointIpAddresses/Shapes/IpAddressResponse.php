<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\ListResolverEndpointIpAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IpId
 * @property string $SubnetId
 * @property string $Ip
 * @property string $Ipv6
 * @property 'CREATING'|'FAILED_CREATION'|'ATTACHING'|'ATTACHED'|'REMAP_DETACHING'|'REMAP_ATTACHING'|'DETACHING'|'FAILED_RESOURCE_GONE'|'DELETING'|'DELETE_FAILED_FAS_EXPIRED'|'UPDATING'|'UPDATE_FAILED' $Status
 * @property string $StatusMessage
 * @property string $CreationTime
 * @property string $ModificationTime
 */
class IpAddressResponse extends Shape
{
    /**
     * @param array{
     *     IpId?: string,
     *     SubnetId?: string,
     *     Ip?: string,
     *     Ipv6?: string,
     *     Status?: 'CREATING'|'FAILED_CREATION'|'ATTACHING'|'ATTACHED'|'REMAP_DETACHING'|'REMAP_ATTACHING'|'DETACHING'|'FAILED_RESOURCE_GONE'|'DELETING'|'DELETE_FAILED_FAS_EXPIRED'|'UPDATING'|'UPDATE_FAILED',
     *     StatusMessage?: string,
     *     CreationTime?: string,
     *     ModificationTime?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
