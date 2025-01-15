<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CarrierIp
 * @property string|null $CustomerOwnedIp
 * @property string|null $IpOwnerId
 * @property string|null $PublicDnsName
 * @property string|null $PublicIp
 */
class InstanceNetworkInterfaceAssociation extends Shape
{
    /**
     * @param array{
     *     CarrierIp?: string|null,
     *     CustomerOwnedIp?: string|null,
     *     IpOwnerId?: string|null,
     *     PublicDnsName?: string|null,
     *     PublicIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
