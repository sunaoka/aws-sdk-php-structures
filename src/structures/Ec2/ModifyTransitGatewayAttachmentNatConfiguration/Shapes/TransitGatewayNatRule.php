<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayAttachmentNatConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $RuleNumber
 * @property string|null $MatchSourceCidr
 * @property string|null $NatCidr
 * @property 'pending'|'activated'|'deactivated'|'deleting'|null $State
 */
class TransitGatewayNatRule extends Shape
{
    /**
     * @param array{
     *     RuleNumber?: int|null,
     *     MatchSourceCidr?: string|null,
     *     NatCidr?: string|null,
     *     State?: 'pending'|'activated'|'deactivated'|'deleting'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
