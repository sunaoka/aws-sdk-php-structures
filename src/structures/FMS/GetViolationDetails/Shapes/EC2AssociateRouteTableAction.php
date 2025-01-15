<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget $RouteTableId
 * @property ActionTarget|null $SubnetId
 * @property ActionTarget|null $GatewayId
 */
class EC2AssociateRouteTableAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     RouteTableId: ActionTarget,
     *     SubnetId?: ActionTarget|null,
     *     GatewayId?: ActionTarget|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
