<?php

namespace Sunaoka\Aws\Structures\DirectConnect\DescribeDirectConnectGatewayAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'virtualPrivateGateway'|'transitGateway'|null $type
 * @property string|null $ownerAccount
 * @property string|null $region
 */
class AssociatedGateway extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     type?: 'virtualPrivateGateway'|'transitGateway'|null,
     *     ownerAccount?: string|null,
     *     region?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
