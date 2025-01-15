<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyVpnTunnelCertificate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationCidrBlock
 * @property 'Static'|null $Source
 * @property 'pending'|'available'|'deleting'|'deleted'|null $State
 */
class VpnStaticRoute extends Shape
{
    /**
     * @param array{
     *     DestinationCidrBlock?: string|null,
     *     Source?: 'Static'|null,
     *     State?: 'pending'|'available'|'deleting'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
