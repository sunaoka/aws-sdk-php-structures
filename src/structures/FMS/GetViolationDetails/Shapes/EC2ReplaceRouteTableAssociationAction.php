<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Description
 * @property ActionTarget $AssociationId
 * @property ActionTarget $RouteTableId
 */
class EC2ReplaceRouteTableAssociationAction extends Shape
{
    /**
     * @param array{
     *     Description?: string,
     *     AssociationId: ActionTarget,
     *     RouteTableId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
