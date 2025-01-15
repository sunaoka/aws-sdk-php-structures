<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget $VpcId
 * @property ActionTarget $RouteTableId
 */
class EC2CopyRouteTableAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     VpcId: ActionTarget,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
