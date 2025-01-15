<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllocationId
 * @property string|null $AssociationId
 * @property string|null $IpOwnerId
 * @property string|null $PublicDnsName
 * @property string|null $PublicIp
 * @property string|null $CustomerOwnedIp
 * @property string|null $CarrierIp
 */
class NetworkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string|null,
     *     AssociationId?: string|null,
     *     IpOwnerId?: string|null,
     *     PublicDnsName?: string|null,
     *     PublicIp?: string|null,
     *     CustomerOwnedIp?: string|null,
     *     CarrierIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
