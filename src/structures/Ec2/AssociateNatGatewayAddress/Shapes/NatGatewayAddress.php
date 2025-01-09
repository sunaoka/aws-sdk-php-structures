<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateNatGatewayAddress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllocationId
 * @property string $NetworkInterfaceId
 * @property string $PrivateIp
 * @property string $PublicIp
 * @property string $AssociationId
 * @property bool $IsPrimary
 * @property string $FailureMessage
 * @property 'assigning'|'unassigning'|'associating'|'disassociating'|'succeeded'|'failed' $Status
 */
class NatGatewayAddress extends Shape
{
    /**
     * @param array{
     *     AllocationId?: string,
     *     NetworkInterfaceId?: string,
     *     PrivateIp?: string,
     *     PublicIp?: string,
     *     AssociationId?: string,
     *     IsPrimary?: bool,
     *     FailureMessage?: string,
     *     Status?: 'assigning'|'unassigning'|'associating'|'disassociating'|'succeeded'|'failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
