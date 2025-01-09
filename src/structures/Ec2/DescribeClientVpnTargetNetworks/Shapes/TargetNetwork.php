<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnTargetNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AssociationId
 * @property string $VpcId
 * @property string $TargetNetworkId
 * @property string $ClientVpnEndpointId
 * @property AssociationStatus $Status
 * @property list<string> $SecurityGroups
 */
class TargetNetwork extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string,
     *     VpcId?: string,
     *     TargetNetworkId?: string,
     *     ClientVpnEndpointId?: string,
     *     Status?: AssociationStatus,
     *     SecurityGroups?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
