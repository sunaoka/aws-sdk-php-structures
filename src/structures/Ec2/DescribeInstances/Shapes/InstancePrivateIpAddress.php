<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceNetworkInterfaceAssociation|null $Association
 * @property bool|null $Primary
 * @property string|null $PrivateDnsName
 * @property string|null $PrivateIpAddress
 */
class InstancePrivateIpAddress extends Shape
{
    /**
     * @param array{
     *     Association?: InstanceNetworkInterfaceAssociation|null,
     *     Primary?: bool|null,
     *     PrivateDnsName?: string|null,
     *     PrivateIpAddress?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
