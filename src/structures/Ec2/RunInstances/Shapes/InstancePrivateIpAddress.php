<?php

namespace Sunaoka\Aws\Structures\Ec2\RunInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property InstanceNetworkInterfaceAssociation $Association
 * @property bool $Primary
 * @property string $PrivateDnsName
 * @property string $PrivateIpAddress
 */
class InstancePrivateIpAddress extends Shape
{
    /**
     * @param array{
     *     Association?: InstanceNetworkInterfaceAssociation,
     *     Primary?: bool,
     *     PrivateDnsName?: string,
     *     PrivateIpAddress?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
