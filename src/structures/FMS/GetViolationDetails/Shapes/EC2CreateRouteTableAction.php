<?php

namespace Sunaoka\Aws\Structures\FMS\GetViolationDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Description
 * @property ActionTarget $VpcId
 */
class EC2CreateRouteTableAction extends Shape
{
    /**
     * @param array{
     *     Description?: string|null,
     *     VpcId: ActionTarget
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
