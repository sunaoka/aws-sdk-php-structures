<?php

namespace Sunaoka\Aws\Structures\Ec2\GetIpamDiscoveredPublicAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property string $GroupId
 */
class IpamPublicAddressSecurityGroup extends Shape
{
    /**
     * @param array{
     *     GroupName?: string,
     *     GroupId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
