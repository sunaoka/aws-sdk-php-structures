<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListResourceEndpointAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ResourceGatewayCharges'|null $scope
 * @property 'VpcEndpointAccount'|'ResourceGatewayAccount'|null $payerResponsibilityType
 */
class PayerResponsibilityEntry extends Shape
{
    /**
     * @param array{
     *     scope?: 'ResourceGatewayCharges'|null,
     *     payerResponsibilityType?: 'VpcEndpointAccount'|'ResourceGatewayAccount'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
