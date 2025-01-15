<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeClientVpnTargetNetworks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AssociationId
 * @property string|null $VpcId
 * @property string|null $TargetNetworkId
 * @property string|null $ClientVpnEndpointId
 * @property AssociationStatus|null $Status
 * @property list<string>|null $SecurityGroups
 */
class TargetNetwork extends Shape
{
    /**
     * @param array{
     *     AssociationId?: string|null,
     *     VpcId?: string|null,
     *     TargetNetworkId?: string|null,
     *     ClientVpnEndpointId?: string|null,
     *     Status?: AssociationStatus|null,
     *     SecurityGroups?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
