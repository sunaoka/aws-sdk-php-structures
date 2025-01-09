<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $VpcId
 * @property ActionTarget $RouteTableId
 */
class EC2CopyRouteTableAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     VpcId: ActionTarget,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
