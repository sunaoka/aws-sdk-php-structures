<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DeleteDirectConnectGatewayAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'virtualPrivateGateway'|'transitGateway' $type
 * @property string $ownerAccount
 * @property string $region
 */
class AssociatedGateway extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     type?: 'virtualPrivateGateway'|'transitGateway',
     *     ownerAccount?: string,
     *     region?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
