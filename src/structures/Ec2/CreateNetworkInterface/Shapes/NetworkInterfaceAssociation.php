<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInterface\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllocationId
 * @property string $AssociationId
 * @property string $IpOwnerId
 * @property string $PublicDnsName
 * @property string $PublicIp
 * @property string $CustomerOwnedIp
 * @property string $CarrierIp
 */
class NetworkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     AssociationId?: string,
     *     IpOwnerId?: string,
     *     PublicDnsName?: string,
     *     PublicIp?: string,
     *     CustomerOwnedIp?: string,
     *     CarrierIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
