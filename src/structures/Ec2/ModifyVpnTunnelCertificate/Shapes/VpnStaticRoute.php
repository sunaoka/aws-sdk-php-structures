<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationCidrBlock
 * @property 'Static' $Source
 * @property 'pending'|'available'|'deleting'|'deleted' $State
 */
class VpnStaticRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string,
     *     Source?: 'Static',
     *     State?: 'pending'|'available'|'deleting'|'deleted'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
