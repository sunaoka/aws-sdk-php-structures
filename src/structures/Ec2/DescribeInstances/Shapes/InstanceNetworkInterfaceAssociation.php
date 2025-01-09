<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CarrierIp
 * @property string $CustomerOwnedIp
 * @property string $IpOwnerId
 * @property string $PublicDnsName
 * @property string $PublicIp
 */
class InstanceNetworkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     CarrierIp?: string,
     *     CustomerOwnedIp?: string,
     *     IpOwnerId?: string,
     *     PublicDnsName?: string,
     *     PublicIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
