<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $RouteTableId
 * @property ActionTarget $SubnetId
 * @property ActionTarget $GatewayId
 */
class EC2AssociateRouteTableAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     RouteTableId: ActionTarget,
     *     SubnetId?: ActionTarget,
     *     GatewayId?: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
