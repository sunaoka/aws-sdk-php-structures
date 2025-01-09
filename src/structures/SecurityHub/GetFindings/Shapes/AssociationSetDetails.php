<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AssociationStateDetails $AssociationState
 * @property string $GatewayId
 * @property bool $Main
 * @property string $RouteTableAssociationId
 * @property string $RouteTableId
 * @property string $SubnetId
 */
class AssociationSetDetails extends Shape
{
    /**
     * @param array{
     *     AssociationState?: AssociationStateDetails,
     *     GatewayId?: string,
     *     Main?: bool,
     *     RouteTableAssociationId?: string,
     *     RouteTableId?: string,
     *     SubnetId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
