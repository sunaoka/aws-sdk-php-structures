<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssociationStateDetails|null $AssociationState
 * @property string|null $GatewayId
 * @property bool|null $Main
 * @property string|null $RouteTableAssociationId
 * @property string|null $RouteTableId
 * @property string|null $SubnetId
 */
class AssociationSetDetails extends Shape
{
    /**
     * @param array{
     *     AssociationState?: AssociationStateDetails|null,
     *     GatewayId?: string|null,
     *     Main?: bool|null,
     *     RouteTableAssociationId?: string|null,
     *     RouteTableId?: string|null,
     *     SubnetId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
